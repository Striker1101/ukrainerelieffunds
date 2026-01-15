<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Data\NewsData;
use App\Models\Category;
use App\Models\Donor;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Mail;
use App\Mail\DonationContactMail;
use App\Data\TestimoniesData;

class PagesController extends Controller
{
    private $news = [
        []
    ];

    // Pages


public function home()
{
    $donations = Donation::all();

    $testimonials = TestimoniesData::testimonies();

    $newsData = NewsData::news();

    return view('pages.home', compact('donations', 'testimonials', 'newsData'));
}

    public function signin() { return view('pages.signin'); }
    public function signup() { return view('pages.signup'); }
    public function about() {
    $testimonials = TestimoniesData::testimonies();
    $newsData = NewsData::news();
    return view('pages.about', compact('testimonials','newsData')); }
    public function contact() { return view('pages.contact'); }

    public function faq() { return view('pages.faq'); }
    public function testimony() {
        $testimonials = TestimoniesData::testimonies();
         return view('pages.testimony', compact('testimonials')); }
    public function admin() { return view('pages.admin'); }

    // Donation listing
    public function donation(Request $request)
    {
        $categorySlug = $request->query('category');

        $categories = Category::all();

        $donationsQuery = Donation::query()->with('category');

        if ($categorySlug) {
            $category = $categories->firstWhere('slug', $categorySlug);
            if ($category) {
                $donationsQuery->where('category_id', $category->id);
            }
        }

        $donations = $donationsQuery->get();

        return view('pages.donation', [
            'donations' => $donations,
            'categories' => $categories
        ]);
    }

    // Donation detail page
    public function donation_detail($id)
    {
        $donation = Donation::with('category', 'donors')->find($id);

        if (!$donation) {
            abort(404);
        }

        $categories = Category::all();
        $options = PaymentMethod::where('show', true)->get();

        return view('pages.donation_detail', compact('donation', 'categories', 'options'));
    }

    public function news() {
    $newsData = NewsData::news();
    return view('pages.news', compact('newsData')); }

    // News detail page (example)
    public function news_detail($id) {
        $news = collect(NewsData::news())->firstWhere('id', $id);
        $categories = Category::all();
        $all_news = collect(NewsData::news());
        $tags = collect(NewsData::tags());
        $recent_news = $all_news->sortByDesc('date')->take(3);

        if (!$news) {
            abort(404);
        }

        return view('pages.news_detail', compact('news', 'categories','recent_news', 'tags'));
    }

    // Contact form submission
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        try {
            Mail::to(config('custom.email'))
                ->send(new DonationContactMail($validated));

            return back()->with('success', 'Message sent successfully.');
        } catch (\Throwable $e) {
            return back()->with('error', 'Failed to send message. Please try again.');
        }
    }

    // Donation form submission
    public function submitDonation(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required|numeric|min:1',
            'payment_mode' => 'required|in:online,offline',
            'payment_option' => 'nullable|exists:payment_methods,slug',
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email' => 'required|email',
            'donation_id' => 'required|exists:donations,id',
        ]);

        $donor = Donor::create([
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'] ?? null,
            'email'      => $data['email'],
            'amount'     => $data['amount'],
            'mode'       => $data['payment_mode'],
            'option'     => $data['payment_option'] ?? null,
            'donation_id'=> $data['donation_id'], // link to donation
        ]);

        return redirect()->back()->with('success', 'Donation recorded');
    }
}
