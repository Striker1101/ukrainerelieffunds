@extends('layouts.app')

@section('title', 'Home')

@section('head')
    <title> {{ config('custom.title', 'Default Title') }} </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>Delivering Clean Water &#8211; Carit</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Carit &raquo; Feed"
        href="https://caritwp.bracketweb.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Carit &raquo; Comments Feed"
        href="https://caritwp.bracketweb.com/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Carit &raquo; Delivering Clean Water Comments Feed"
        href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-01/feed/" />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://caritwp.bracketweb.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcaritwp.bracketweb.com%2Fdonations%2Fupport-for-vulnerable-populations-01%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://caritwp.bracketweb.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcaritwp.bracketweb.com%2Fdonations%2Fupport-for-vulnerable-populations-01%2F&#038;format=xml" />
    <style id='wp-img-auto-sizes-contain-inline-css'>
        img:is([sizes=auto i],[sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }

        /*# sourceURL=wp-img-auto-sizes-contain-inline-css */
    </style>
    <link rel='stylesheet' id='givewp-campaign-blocks-fonts-css'
        href='https://fonts.googleapis.com/css2?family=Inter%3Awght%40400%3B500%3B600%3B700&#038;display=swap&#038;ver=6.9'
        media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

        /*# sourceURL=wp-emoji-styles-inline-css */
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }

        /*# sourceURL=/wp-includes/css/classic-themes.min.css */
    </style>
    <style id='givewp-campaign-comments-block-style-inline-css'>
        .givewp-campaign-comment-block-card {
            display: flex;
            gap: var(--givewp-spacing-3);
            padding: var(--givewp-spacing-4) 0
        }

        .givewp-campaign-comment-block-card__avatar {
            align-items: center;
            border-radius: 50%;
            display: flex;
            height: 40px;
            justify-content: center;
            width: 40px
        }

        .givewp-campaign-comment-block-card__avatar img {
            align-items: center;
            border-radius: 50%;
            display: flex;
            height: auto;
            justify-content: center;
            min-width: 40px;
            width: 100%
        }

        .givewp-campaign-comment-block-card__donor-name {
            color: var(--givewp-neutral-700);
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            margin: 0;
            text-align: left
        }

        .givewp-campaign-comment-block-card__details {
            align-items: center;
            color: var(--givewp-neutral-400);
            display: flex;
            font-size: .875rem;
            font-weight: 500;
            gap: var(--givewp-spacing-2);
            height: auto;
            line-height: 1.43;
            margin: 2px 0 var(--givewp-spacing-3) 0;
            text-align: left
        }

        .givewp-campaign-comment-block-card__comment {
            color: var(--givewp-neutral-700);
            font-size: 1rem;
            line-height: 1.5;
            margin: 0;
            text-align: left
        }

        .givewp-campaign-comment-block-card__read-more {
            background: none;
            border: none;
            color: var(--givewp-blue-500);
            cursor: pointer;
            font-size: .875rem;
            line-height: 1.43;
            outline: none;
            padding: 0
        }

        .givewp-campaign-comments-block-empty-state {
            align-items: center;
            background-color: var(--givewp-shades-white);
            border: 1px solid var(--givewp-neutral-50);
            border-radius: .5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: var(--givewp-spacing-6)
        }

        .givewp-campaign-comments-block-empty-state__details {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: var(--givewp-spacing-1);
            justify-content: center;
            margin: .875rem 0
        }

        .givewp-campaign-comments-block-empty-state__title {
            color: var(--givewp-neutral-700);
            font-size: 1rem;
            font-weight: 500;
            margin: 0
        }

        .givewp-campaign-comments-block-empty-state__description {
            color: var(--givewp-neutral-700);
            font-size: .875rem;
            line-height: 1.43;
            margin: 0
        }

        .givewp-campaign-comment-block {
            background-color: var(--givewp-shades-white);
            display: flex;
            flex-direction: column;
            gap: var(--givewp-spacing-2);
            padding: var(--givewp-spacing-6) 0
        }

        .givewp-campaign-comment-block__title {
            color: var(--givewp-neutral-900);
            font-size: 18px;
            font-weight: 600;
            line-height: 1.56;
            margin: 0;
            text-align: left
        }

        .givewp-campaign-comment-block__cta {
            align-items: center;
            background-color: var(--givewp-neutral-50);
            border-radius: 4px;
            color: var(--giewp-neutral-500);
            display: flex;
            font-size: 14px;
            font-weight: 600;
            gap: 8px;
            height: 36px;
            line-height: 1.43;
            margin: 0;
            padding: var(--givewp-spacing-2) var(--givewp-spacing-4);
            text-align: left
        }

        /*# sourceURL=https://caritwp.bracketweb.com/wp-content/plugins/give/build/campaignCommentsBlockApp.css */
    </style>
    <style id='givewp-campaign-cover-block-style-inline-css'>
        .givewp-campaign-selector {
            border: 1px solid #e5e7eb;
            border-radius: 5px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .05);
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 40px 24px
        }

        .givewp-campaign-selector__label {
            padding-bottom: 16px
        }

        .givewp-campaign-selector__select input[type=text]:focus {
            border-color: transparent;
            box-shadow: 0 0 0 1px transparent;
            outline: 2px solid transparent
        }

        .givewp-campaign-selector__logo {
            align-self: center
        }

        .givewp-campaign-selector__open {
            background: #2271b1;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            padding: .5rem 1rem
        }

        .givewp-campaign-selector__submit {
            background-color: #27ae60;
            border: 0;
            border-radius: 5px;
            color: #fff;
            font-weight: 700;
            outline: none;
            padding: 1rem;
            text-align: center;
            transition: .2s;
            width: 100%
        }

        .givewp-campaign-selector__submit:disabled {
            background-color: #f3f4f6;
            color: #9ca0af
        }

        .givewp-campaign-selector__submit:hover:not(:disabled) {
            cursor: pointer;
            filter: brightness(1.2)
        }

        .givewp-campaign-cover-block__button {
            align-items: center;
            border: 1px solid #2271b1;
            border-radius: 2px;
            color: #2271b1;
            display: flex;
            justify-content: center;
            margin-bottom: .5rem;
            min-height: 32px;
            width: 100%
        }

        .givewp-campaign-cover-block__image {
            border-radius: 2px;
            display: flex;
            flex-grow: 1;
            margin-bottom: .5rem;
            max-height: 4.44rem;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%
        }

        .givewp-campaign-cover-block__help-text {
            color: #4b5563;
            font-size: .75rem;
            font-stretch: normal;
            font-style: normal;
            font-weight: 400;
            letter-spacing: normal;
            line-height: 1.4;
            text-align: left
        }

        .givewp-campaign-cover-block__edit-campaign-link {
            align-items: center;
            display: inline-flex;
            font-size: .75rem;
            font-stretch: normal;
            font-style: normal;
            font-weight: 400;
            gap: .125rem;
            line-height: 1.4
        }

        .givewp-campaign-cover-block__edit-campaign-link svg {
            fill: currentColor;
            height: 1.25rem;
            width: 1.25rem
        }

        .givewp-campaign-cover-block-preview__image {
            align-items: center;
            display: flex;
            height: 100%;
            justify-content: center;
            width: 100%
        }

        /*# sourceURL=https://caritwp.bracketweb.com/wp-content/plugins/give/build/campaignCoverBlock.css */
    </style>
    <style id='givewp-campaign-donations-style-inline-css'>
        .givewp-campaign-donations-block {
            padding: 1.5rem 0
        }

        .givewp-campaign-donations-block * {
            font-family: Inter, sans-serif
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__header {
            align-items: center;
            display: flex;
            justify-content: space-between;
            margin-bottom: .5rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__title {
            color: var(--givewp-neutral-900);
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.56;
            margin: 0
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donations {
            display: grid;
            gap: .5rem;
            margin: 0;
            padding: 0
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation,
        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-state {
            background-color: var(--givewp-shades-white);
            border: 1px solid var(--givewp-neutral-50);
            border-radius: .5rem;
            display: flex;
            padding: 1rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation {
            align-items: center;
            gap: .75rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-icon {
            align-items: center;
            display: flex
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-icon img {
            border-radius: 100%;
            height: 2.5rem;
            -o-object-fit: cover;
            object-fit: cover;
            width: 2.5rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            row-gap: .25rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-description {
            color: var(--givewp-neutral-500);
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
            margin: 0
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-description strong {
            color: var(--givewp-neutral-700);
            font-weight: 600
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-date {
            align-items: center;
            color: var(--givewp-neutral-400);
            display: flex;
            font-size: .875rem;
            font-weight: 500;
            line-height: 1.43
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-ribbon {
            align-items: center;
            border-radius: 100%;
            color: #1f2937;
            display: flex;
            height: 1.25rem;
            justify-content: center;
            margin-left: auto;
            width: 1.25rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-ribbon[data-position="1"] {
            background-color: gold
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-ribbon[data-position="2"] {
            background-color: silver
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-ribbon[data-position="3"] {
            background-color: #cd7f32;
            color: #fffaf2
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donation-amount {
            color: var(--givewp-neutral-700);
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.56;
            margin-left: auto
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__footer {
            display: flex;
            justify-content: center;
            margin-top: .5rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donate-button button.givewp-donation-form-modal__open,
        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-button button.givewp-donation-form-modal__open,
        .givewp-campaign-donations-block .givewp-campaign-donations-block__load-more-button {
            background: none !important;
            border: 1px solid var(--givewp-primary-color);
            border-radius: .5rem;
            color: var(--givewp-primary-color) !important;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.43;
            padding: .25rem 1rem !important
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__donate-button button.givewp-donation-form-modal__open:hover,
        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-button button.givewp-donation-form-modal__open:hover,
        .givewp-campaign-donations-block .givewp-campaign-donations-block__load-more-button:hover {
            background: var(--givewp-primary-color) !important;
            color: var(--givewp-shades-white) !important
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-state {
            align-items: center;
            flex-direction: column;
            padding: 1.5rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-description,
        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-title {
            color: var(--givewp-neutral-700);
            margin: 0
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-title {
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-description {
            font-size: .875rem;
            line-height: 1.43;
            margin-top: .25rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-icon {
            color: var(--givewp-secondary-color);
            margin-bottom: .875rem;
            order: -1
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-button {
            margin-top: .875rem
        }

        .givewp-campaign-donations-block .givewp-campaign-donations-block__empty-button button.givewp-donation-form-modal__open {
            border-radius: .25rem;
            padding: .5rem 1rem !important
        }

        /*# sourceURL=https://caritwp.bracketweb.com/wp-content/plugins/give/build/campaignDonationsBlockApp.css */
    </style>
    <style id='givewp-campaign-donors-style-inline-css'>
        .givewp-campaign-donors-block {
            padding: 1.5rem 0
        }

        .givewp-campaign-donors-block * {
            font-family: Inter, sans-serif
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__header {
            align-items: center;
            display: flex;
            justify-content: space-between;
            margin-bottom: .5rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__title {
            color: var(--givewp-neutral-900);
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.56;
            margin: 0
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donors {
            display: grid;
            gap: .5rem;
            margin: 0;
            padding: 0
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor,
        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-state {
            background-color: var(--givewp-shades-white);
            border: 1px solid var(--givewp-neutral-50);
            border-radius: .5rem;
            display: flex;
            padding: 1rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor {
            align-items: center;
            gap: .75rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-avatar {
            align-items: center;
            display: flex
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-avatar img {
            border-radius: 100%;
            height: 2.5rem;
            -o-object-fit: cover;
            object-fit: cover;
            width: 2.5rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-info {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            row-gap: .25rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-name {
            color: var(--givewp-neutral-900);
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            margin: 0
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-date {
            align-items: center;
            color: var(--givewp-neutral-400);
            display: flex;
            font-size: .875rem;
            font-weight: 500;
            line-height: 1.43
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-date:before {
            background: var(--givewp-neutral-100);
            border-radius: 100%;
            content: "";
            display: block;
            height: .25rem;
            margin: 0 .5rem;
            width: .25rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-ribbon {
            align-items: center;
            border-radius: 100%;
            color: #1f2937;
            display: flex;
            height: 1.25rem;
            justify-content: center;
            margin-left: .5rem;
            width: 1.25rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-ribbon[data-position="1"] {
            background-color: gold
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-ribbon[data-position="2"] {
            background-color: silver
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-ribbon[data-position="3"] {
            background-color: #cd7f32;
            color: #fffaf2
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-company {
            color: var(--givewp-neutral-400);
            display: flex;
            flex: 0 0 100%;
            font-size: .875rem;
            font-weight: 500;
            line-height: 1.43
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donor-amount {
            color: var(--givewp-neutral-700);
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.56;
            margin-left: auto
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__footer {
            display: flex;
            justify-content: center;
            margin-top: .5rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donate-button button.givewp-donation-form-modal__open,
        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-button button.givewp-donation-form-modal__open,
        .givewp-campaign-donors-block .givewp-campaign-donors-block__load-more-button {
            background: none !important;
            border: 1px solid var(--givewp-primary-color);
            border-radius: .5rem;
            color: var(--givewp-primary-color) !important;
            font-size: .875rem;
            font-weight: 600;
            line-height: 1.43;
            padding: .25rem 1rem !important
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__donate-button button.givewp-donation-form-modal__open:hover,
        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-button button.givewp-donation-form-modal__open:hover,
        .givewp-campaign-donors-block .givewp-campaign-donors-block__load-more-button:hover {
            background: var(--givewp-primary-color) !important;
            color: var(--givewp-shades-white) !important
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-state {
            align-items: center;
            flex-direction: column;
            padding: 1.5rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-description,
        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-title {
            color: var(--givewp-neutral-700);
            margin: 0
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-title {
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-description {
            font-size: .875rem;
            line-height: 1.43;
            margin-top: .25rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-icon {
            color: var(--givewp-secondary-color);
            margin-bottom: .875rem;
            order: -1
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-button {
            margin-top: .875rem
        }

        .givewp-campaign-donors-block .givewp-campaign-donors-block__empty-button button.givewp-donation-form-modal__open {
            border-radius: .25rem;
            padding: .5rem 1rem !important
        }

        /*# sourceURL=https://caritwp.bracketweb.com/wp-content/plugins/give/build/campaignDonorsBlockApp.css */
    </style>
    <style id='givewp-campaign-form-style-inline-css'>
        .givewp-donation-form-modal {
            outline: none;
            overflow-y: scroll;
            padding: 1rem;
            width: 100%
        }

        .givewp-donation-form-modal[data-entering=true] {
            animation: modal-fade .3s, modal-zoom .6s
        }

        @keyframes modal-fade {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes modal-zoom {
            0% {
                transform: scale(.8)
            }

            to {
                transform: scale(1)
            }
        }

        .givewp-donation-form-modal__overlay {
            align-items: center;
            background: rgba(0, 0, 0, .7);
            display: flex;
            flex-direction: column;
            height: var(--visual-viewport-height);
            justify-content: center;
            left: 0;
            position: fixed;
            top: 0;
            width: 100vw;
            z-index: 100
        }

        .givewp-donation-form-modal__overlay[data-loading=true] {
            display: none
        }

        .givewp-donation-form-modal__overlay[data-entering=true] {
            animation: modal-fade .3s
        }

        .givewp-donation-form-modal__overlay[data-exiting=true] {
            animation: modal-fade .15s ease-in reverse
        }

        .givewp-donation-form-modal__open__spinner {
            left: 50%;
            line-height: 1;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 100
        }

        .givewp-donation-form-modal__open {
            position: relative
        }

        .givewp-donation-form-modal__close {
            background: #e7e8ed;
            border: 1px solid transparent;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            padding: .75rem;
            position: fixed;
            right: 25px;
            top: 25px;
            transition: .2s;
            width: -moz-fit-content;
            width: fit-content;
            z-index: 999
        }

        .givewp-donation-form-modal__close svg {
            height: 1rem;
            width: 1rem
        }

        .givewp-donation-form-modal__close:active,
        .givewp-donation-form-modal__close:focus,
        .givewp-donation-form-modal__close:hover {
            background-color: #caccd7;
            border: 1px solid #caccd7
        }

        .admin-bar .givewp-donation-form-modal {
            margin-top: 32px
        }

        .admin-bar .givewp-donation-form-modal__close {
            top: 57px
        }

        .givewp-entity-selector {
            border: 1px solid #e5e7eb;
            border-radius: 5px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .05);
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 40px 24px
        }

        .givewp-entity-selector__label {
            padding-bottom: 16px
        }

        .givewp-entity-selector__select input[type=text]:focus {
            border-color: transparent;
            box-shadow: 0 0 0 1px transparent;
            outline: 2px solid transparent
        }

        .givewp-entity-selector__logo {
            align-self: center
        }

        .givewp-entity-selector__open {
            background: #2271b1;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            padding: .5rem 1rem
        }

        .givewp-entity-selector__submit {
            background-color: #27ae60;
            border: 0;
            border-radius: 5px;
            color: #fff;
            font-weight: 700;
            outline: none;
            padding: 1rem;
            text-align: center;
            transition: .2s;
            width: 100%
        }

        .givewp-entity-selector__submit:disabled {
            background-color: #f3f4f6;
            color: #9ca0af
        }

        .givewp-entity-selector__submit:hover:not(:disabled) {
            cursor: pointer;
            filter: brightness(1.2)
        }

        .givewp-campaign-selector {
            border: 1px solid #e5e7eb;
            border-radius: 5px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .05);
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 40px 24px
        }

        .givewp-campaign-selector__label {
            padding-bottom: 16px
        }

        .givewp-campaign-selector__select input[type=text]:focus {
            border-color: transparent;
            box-shadow: 0 0 0 1px transparent;
            outline: 2px solid transparent
        }

        .givewp-campaign-selector__logo {
            align-self: center
        }

        .givewp-campaign-selector__open {
            background: #2271b1;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            padding: .5rem 1rem
        }

        .givewp-campaign-selector__submit {
            background-color: #27ae60;
            border: 0;
            border-radius: 5px;
            color: #fff;
            font-weight: 700;
            outline: none;
            padding: 1rem;
            text-align: center;
            transition: .2s;
            width: 100%
        }

        .givewp-campaign-selector__submit:disabled {
            background-color: #f3f4f6;
            color: #9ca0af
        }

        .givewp-campaign-selector__submit:hover:not(:disabled) {
            cursor: pointer;
            filter: brightness(1.2)
        }

        .givewp-donation-form-link,
        .givewp-donation-form-modal__open {
            background: var(--givewp-primary-color, #2271b1);
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
            font-size: 1rem;
            font-weight: 500 !important;
            line-height: 1.5;
            padding: .75rem 1.25rem !important;
            text-decoration: none !important;
            transition: all .2s ease;
            width: 100%
        }

        .givewp-donation-form-link:active,
        .givewp-donation-form-link:focus,
        .givewp-donation-form-link:focus-visible,
        .givewp-donation-form-link:hover,
        .givewp-donation-form-modal__open:active,
        .givewp-donation-form-modal__open:focus,
        .givewp-donation-form-modal__open:focus-visible,
        .givewp-donation-form-modal__open:hover {
            background-color: color-mix(in srgb, var(--givewp-primary-color, #2271b1), #000 20%)
        }

        .components-input-control__label {
            width: 100%
        }

        .wp-block-givewp-campaign-form {
            position: relative
        }

        .wp-block-givewp-campaign-form form[id*=give-form] #give-gateway-radio-list>li input[type=radio] {
            display: inline-block
        }

        .wp-block-givewp-campaign-form iframe {
            pointer-events: none;
            width: 100% !important
        }

        .give-change-donation-form-btn svg {
            margin-top: 3px
        }

        .givewp-default-form-toggle {
            margin-top: var(--givewp-spacing-4)
        }

        /*# sourceURL=https://caritwp.bracketweb.com/wp-content/plugins/give/build/campaignFormBlock.css */
    </style>
    <style id='givewp-campaign-goal-style-inline-css'>
        .givewp-campaign-goal {
            display: flex;
            flex-direction: column;
            gap: .5rem;
            padding-bottom: 1rem
        }

        .givewp-campaign-goal__container {
            display: flex;
            flex-direction: row;
            justify-content: space-between
        }

        .givewp-campaign-goal__container-item {
            display: flex;
            flex-direction: column;
            gap: .2rem
        }

        .givewp-campaign-goal__container-item span {
            color: var(--givewp-neutral-500);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .48px;
            line-height: 1.5;
            text-transform: uppercase
        }

        .givewp-campaign-goal__container-item strong {
            color: var(--givewp-neutral-900);
            font-size: 20px;
            font-weight: 600;
            line-height: 1.6
        }

        .givewp-campaign-goal__progress-bar {
            display: flex
        }

        .givewp-campaign-goal__progress-bar-container {
            background-color: #f2f2f2;
            border-radius: 14px;
            box-shadow: inset 0 1px 4px 0 rgba(0, 0, 0, .09);
            display: flex;
            flex-grow: 1;
            height: 8px
        }

        .givewp-campaign-goal__progress-bar-progress {
            background: var(--givewp-secondary-color, #2d802f);
            border-radius: 14px;
            box-shadow: inset 0 1px 4px 0 rgba(0, 0, 0, .09);
            display: flex;
            height: 8px
        }

        /*# sourceURL=https://caritwp.bracketweb.com/wp-content/plugins/give/build/campaignGoalBlockApp.css */
    </style>
    <style id='givewp-campaign-stats-block-style-inline-css'>
        .givewp-campaign-stats-block span {
            color: var(--givewp-neutral-500);
            display: block;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .48px;
            line-height: 1.5;
            margin-bottom: 2px;
            text-align: left;
            text-transform: uppercase
        }

        .givewp-campaign-stats-block strong {
            color: var(--givewp-neutral-900);
            font-size: 20px;
            font-weight: 600;
            letter-spacing: normal;
            line-height: 1.6
        }

        /*# sourceURL=https://caritwp.bracketweb.com/wp-content/plugins/give/build/campaignStatsBlockApp.css */
    </style>
    <style id='givewp-campaign-donate-button-style-inline-css'>
        .givewp-donation-form-link,
        .givewp-donation-form-modal__open {
            background: var(--givewp-primary-color, #2271b1);
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
            font-size: 1rem;
            font-weight: 500 !important;
            line-height: 1.5;
            padding: .75rem 1.25rem !important;
            text-decoration: none !important;
            transition: all .2s ease;
            width: 100%
        }

        .givewp-donation-form-link:active,
        .givewp-donation-form-link:focus,
        .givewp-donation-form-link:focus-visible,
        .givewp-donation-form-link:hover,
        .givewp-donation-form-modal__open:active,
        .givewp-donation-form-modal__open:focus,
        .givewp-donation-form-modal__open:focus-visible,
        .givewp-donation-form-modal__open:hover {
            background-color: color-mix(in srgb, var(--givewp-primary-color, #2271b1), #000 20%)
        }

        .give-change-donation-form-btn svg {
            margin-top: 3px
        }

        .givewp-default-form-toggle {
            margin-top: var(--givewp-spacing-4)
        }

        /*# sourceURL=https://caritwp.bracketweb.com/wp-content/plugins/give/build/campaignDonateButtonBlockApp.css */
    </style>
    <link rel='stylesheet' id='carit-editor-fonts-css'
        href='//fonts.googleapis.com/css?family=Inter%3A400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%7CSora%3A400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%26subset%3Dlatin%2Clatin-ext'
        media='all' />
    <link rel='stylesheet' id='fontawesome-css'
        href='https://caritwp.bracketweb.com/wp-content/themes/carit/assets/vendors/fontawesome/css/all.min.css?ver=5.15.1'
        media='all' />
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(252, 185, 0) 0%, rgb(255, 105, 0) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgb(255, 105, 0) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);
            --wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-term-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-term-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }

        /*# sourceURL=global-styles-inline-css */
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.1.4'
        media='all' />
    <link rel='stylesheet' id='layerdrops-toolbar-css-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/layerdrops-toolbar/assets/css/layerdrops-toolbar.css?ver=1768374883'
        media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }

        /*# sourceURL=woocommerce-inline-inline-css */
    </style>
    <link rel='stylesheet' id='give-styles-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/give/build/assets/dist/css/give.css?ver=4.13.2'
        media='all' />
    <link rel='stylesheet' id='give-donation-summary-style-frontend-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/give/build/assets/dist/css/give-donation-summary.css?ver=4.13.2'
        media='all' />
    <link rel='stylesheet' id='givewp-design-system-foundation-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/give/build/assets/dist/css/design-system/foundation.css?ver=1.2.0'
        media='all' />
    <link rel='stylesheet' id='slick-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.css?ver=6.9'
        media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css?ver=6.9'
        media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-wpc-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/custom-theme.css?ver=6.9'
        media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup.css?ver=6.9'
        media='all' />
    <link rel='stylesheet' id='woosq-feather-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/libs/feather/feather.css?ver=6.9'
        media='all' />
    <link rel='stylesheet' id='woosq-icons-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/css/icons.css?ver=4.2.8'
        media='all' />
    <link rel='stylesheet' id='woosq-frontend-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/css/frontend.css?ver=4.2.8'
        media='all' />
    <link rel='stylesheet' id='woosw-icons-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-wishlist/assets/css/icons.css?ver=5.0.8'
        media='all' />
    <link rel='stylesheet' id='woosw-frontend-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-wishlist/assets/css/frontend.css?ver=5.0.8'
        media='all' />
    <style id='woosw-frontend-inline-css'>
        .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
            background-color: #5fbd74;
        }

        .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
            color: #5fbd74;
            border-color: #5fbd74;
        }

        /*# sourceURL=woosw-frontend-inline-css */
    </style>
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.44.0'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.33.4'
        media='all' />
    <link rel='stylesheet' id='elementor-post-4-css'
        href='https://caritwp.bracketweb.com/wp-content/uploads/elementor/css/post-4.css?ver=1765613410' media='all' />
    <link rel='stylesheet' id='widget-heading-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.33.4'
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.33.4'
        media='all' />
    <link rel='stylesheet' id='elementor-post-354-css'
        href='https://caritwp.bracketweb.com/wp-content/uploads/elementor/css/post-354.css?ver=1766597604'
        media='all' />
    <link rel='stylesheet' id='animate-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/animate/animate.min.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='aos-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/aos/aos.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='custom-animate-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/animate/custom-animate.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='bootstrap-select-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/bootstrap-select/css/bootstrap-select.min.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='bxslider-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/bxslider/jquery.bxslider.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='jarallax-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jarallax/jarallax.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='jquery-magnific-popup-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='nouislider-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/nouislider/nouislider.min.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='nouislider-pips-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/nouislider/nouislider.pips.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='tiny-slider-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/tiny-slider/tiny-slider.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='odometer-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/odometer/odometer.min.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='owl-carousel-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/owl-carousel/owl.carousel.min.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='owl-theme-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/owl-carousel/owl.theme.default.min.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='reey-font-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/reey-font/stylesheet.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='alagambe-font-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/alagambe-font/stylesheet.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='timepicker-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/timepicker/timePicker.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='daterangepicker-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/daterangepicker/daterangepicker.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='slick-carousel-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/slick-carousel/slick.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='slick-carousel-theme-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/slick-carousel/slick-theme.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='jquery-ui-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jquery-ui/jquery-ui.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='carit-icons-two-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/carit-icons-two/style.css?ver=1762175696'
        media='all' />
    <link rel='stylesheet' id='carit-icons-three-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/carit-icons-three/style.css?ver=1762175696'
        media='all' />
    <link rel='stylesheet' id='carit-addon-style-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/css/carit-addon.css?ver=1762175362'
        media='all' />
    <link rel='stylesheet' id='carit-fonts-css'
        href='//fonts.googleapis.com/css?family=Inter%3A400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%7CSora%3A400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%26subset%3Dlatin%2Clatin-ext'
        media='all' />
    <link rel='stylesheet' id='carit-icons-css'
        href='https://caritwp.bracketweb.com/wp-content/themes/carit/assets/vendors/carit-icons/style.css?ver=1.1'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='https://caritwp.bracketweb.com/wp-content/themes/carit/assets/vendors/bootstrap/css/bootstrap.min.css?ver=5.0.0'
        media='all' />
    <link rel='stylesheet' id='carit-style-css'
        href='https://caritwp.bracketweb.com/wp-content/themes/carit/style.css?ver=1768374883' media='all' />
    <style id='carit-style-inline-css'>
        :root {}

        .page-header__bg {
            background-image: url(https://caritwp.bracketweb.com/wp-content/uploads/2025/11/page-header-bg-1-1.jpg);
        }

        .page-header__bg::before {
            background-image: url();
        }

        .preloader .preloader__image {
            background-image: url(https://caritwp.bracketweb.com/wp-content/uploads/2025/11/loader.png);
        }

        @font-face {
            font-family: "star";
            src: url("https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/fonts/star.eot");
            src: url("https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/fonts/star.eot?#iefix") format("embedded-opentype"),
                url("https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/fonts/star.woff") format("woff"),
                url("https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/fonts/star.ttf") format("truetype"),
                url("https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/fonts/star.svg#star") format("svg");
            font-weight: normal;
            font-style: normal;
        }

        /*# sourceURL=carit-style-inline-css */
    </style>
    <link rel='stylesheet' id='elementor-gf-roboto-css'
        href='https://fonts.googleapis.com/css?family=Roboto:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;display=swap'
        media='all' />
    <link rel='stylesheet' id='elementor-gf-robotoslab-css'
        href='https://fonts.googleapis.com/css?family=Roboto+Slab:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;display=swap'
        media='all' />
    <script type="text/template" id="tmpl-variation-template">

</script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/hooks.min.js?ver=dd5603f07f9220ed27f1" id="wp-hooks-js">
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/i18n.min.js?ver=c26c3dc7bed366793375" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        //# sourceURL=wp-i18n-js-after
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.10.4.0"
        id="wc-jquery-blockui-js" data-wp-strategy="defer"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=10.4.0"
        id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.10.4.0"
        id="wc-js-cookie-js" defer data-wp-strategy="defer"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=10.4.0"
        id="woocommerce-js" defer data-wp-strategy="defer"></script>
    <script id="give-js-extra">
        var give_global_vars = {
            "ajaxurl": "",
            "checkout_nonce": "57554d2e48",
            "currency": "USD",
            "currency_sign": "$",
            "currency_pos": "before",
            "thousands_separator": ",",
            "decimal_separator": ".",
            "no_gateway": "Please select a payment method.",
            "bad_minimum": "The minimum custom donation amount for this form is",
            "bad_maximum": "The maximum custom donation amount for this form is",
            "general_loading": "Loading...",
            "purchase_loading": "Please Wait...",
            "textForOverlayScreen": "\u003Ch3\u003EProcessing...\u003C/h3\u003E\u003Cp\u003EThis will only take a second!\u003C/p\u003E",
            "number_decimals": "2",
            "is_test_mode": "1",
            "give_version": "4.13.2",
            "magnific_options": {
                "main_class": "give-modal",
                "close_on_bg_click": false
            },
            "form_translation": {
                "payment-mode": "Please select payment mode.",
                "give_first": "Please enter your first name.",
                "give_last": "Please enter your last name.",
                "give_email": "Please enter a valid email address.",
                "give_user_login": "Invalid email address or username.",
                "give_user_pass": "Enter a password.",
                "give_user_pass_confirm": "Enter the password confirmation.",
                "give_agree_to_terms": "You must agree to the terms and conditions."
            },
            "confirm_email_sent_message": "Please check your email and click on the link to access your complete donation history.",
            "ajax_vars": {
                "ajaxurl": "",
                "ajaxNonce": "3d9830d2ab",
                "loading": "Loading",
                "select_option": "Please select an option",
                "default_gateway": "manual",
                "permalinks": "1",
                "number_decimals": 2
            },
            "cookie_hash": "85c5d7642981bced02ad8b97c392840f",
            "session_nonce_cookie_name": "wp-give_session_reset_nonce_85c5d7642981bced02ad8b97c392840f",
            "session_cookie_name": "wp-give_session_85c5d7642981bced02ad8b97c392840f",
            "delete_session_nonce_cookie": "1"
        };
        var giveApiSettings = {
            "root": "",
            "rest_base": "give-api/v2"
        };
        //# sourceURL=give-js-extra
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/give/build/assets/dist/js/give.js?ver=8540f4f50a2032d9c5b5"
        id="give-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/underscore.min.js?ver=1.13.7" id="underscore-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/wp-util.min.js?ver=6.9" id="wp-util-js"></script>
    <link rel="https://api.w.org/" href="https://caritwp.bracketweb.com/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://caritwp.bracketweb.com/wp-json/wp/v2/give_forms/354" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://caritwp.bracketweb.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.9" />
    <meta name="generator" content="WooCommerce 10.4.0" />
    <link rel="canonical" href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-01/" />
    <link rel='shortlink' href='https://caritwp.bracketweb.com/?p=354' />
    <meta name="generator" content="Give v4.13.2" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.33.4; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <link rel="icon"
        href="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/cropped-apple-touch-icon-32x32.png"
        sizes="32x32" />
    <link rel="icon"
        href="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/cropped-apple-touch-icon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/cropped-apple-touch-icon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/cropped-apple-touch-icon-270x270.png" />

@endsection

@section('content')




    <section class="page-header">
        <div class="page-header__bg"></div><!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">
                {{ $donation['title'] }}
            </h2><!-- /.page-title -->
            <ul class="carit-breadcrumb list-unstyled">
                <!-- Breadcrumb NavXT 7.5.0 -->
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item"
                            typeof="WebPage" title="Go to Carit." href="{{ route('home') }}" class="home"><span
                                property="name">{{ config('custom.title') }}</span></a>
                        <meta property="position" content="1">
                    </span></li>
                <li class="archive post-give_forms-archive"><span property="itemListElement" typeof="ListItem"><a
                            property="item" typeof="WebPage" title="Go to Donation Forms."
                            href="{{ route('donation') }}" class="archive post-give_forms-archive"><span
                                property="name">Donation Forms</span></a>
                        <meta property="position" content="2">
                    </span></li>
                <li class="taxonomy give_forms_category"><span property="itemListElement" typeof="ListItem"><a
                            property="item" typeof="WebPage" title="Go to the Disaster Relief Category archives."
                            href="{{ route('donation') }}?category={{ $donation['category'] }}"
                            class="taxonomy give_forms_category"><span
                                property="name">{{ $donation['category']['name'] }}</span></a>
                        <meta property="position" content="3">
                    </span></li>
                <li class="post post-give_forms current-item"><span property="itemListElement" typeof="ListItem"><span
                            property="name" class="post post-give_forms current-item">{{ $donation['title'] }}</span>
                        <meta property="url" content="{{ route('donation', $donation['id']) }}">
                        <meta property="position" content="4">
                    </span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <div data-elementor-type="wp-post" data-elementor-id="354" class="elementor elementor-354">
        <div class="elementor-element elementor-element-3f7fa42 e-flex e-con-boxed e-con e-parent" data-id="3f7fa42"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-1f2bef0 e-con-full e-flex e-con e-child" data-id="1f2bef0"
                    data-element_type="container">
                    <div class="elementor-element elementor-element-5f92283 elementor-widget elementor-widget-carit-donation-details"
                        data-id="5f92283" data-element_type="widget" data-widget_type="carit-donation-details.default">
                        <div class="elementor-widget-container">

                            <div class="donations-details__thumb wow fadeInUp" data-wow-duration="1500ms"
                                data-wow-delay="100ms">

                                @php
                                    $donated = (float) str_replace(',', '', $donation['donation']);
                                    $goal = (float) str_replace(',', '', $donation['goal']);
                                    $percent = $goal > 0 ? round(($donated / $goal) * 100) : 0;
                                @endphp

                                <img width="633" height="352" src="{{ asset('images/' . $donation['image']) }}"
                                    class="attachment-carit_blog_770X428 size-carit_blog_770X428"
                                    alt="{{ $donation['title'] }}" />

                                <div class="donation-card__count-bar count-box">
                                    <h3 class="donation-card__funfact">
                                        <span class="count-text">{{ $percent }}</span><span>%</span>
                                    </h3>

                                    <div class="circle-progress"
                                        data-options='{
                "value": {{ $percent / 100 }},
                "size": 60,
                "emptyFill": "rgba(0, 0, 0, 0)",
                "reverse": true,
                "fill": {
                    "color": "#FFE400"
                }
            }'>
                                    </div>
                                </div>
                            </div>
                            <!-- /.donations-details__thumb -->
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0f18e89 elementor-widget elementor-widget-carit-donation-details"
                        data-id="0f18e89" data-element_type="widget" data-widget_type="carit-donation-details.default">
                        <div class="elementor-widget-container">
                            <h3 class="donation-card__title">{{ $donation['title'] }}r</h3><!-- /.donation-card__title -->
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-1860c8a elementor-widget elementor-widget-text-editor"
                        data-id="1860c8a" data-element_type="widget" data-widget_type="text-editor.default">
                        <p>{{ $donation['content_one'] }}</p>
                    </div>
                    <div class="elementor-element elementor-element-4be2af2 elementor-widget elementor-widget-text-editor"
                        data-id="4be2af2" data-element_type="widget" data-widget_type="text-editor.default">
                        {{ $donation['content_two'] }} </div>
                    <div class="elementor-element elementor-element-b4dd2b7 elementor-widget elementor-widget-heading"
                        data-id="b4dd2b7" data-element_type="widget" data-widget_type="heading.default">
                        <h2 class="elementor-heading-title elementor-size-default">{{ $donation['sub_topic'] }}</h2>
                    </div>
                    <div class="elementor-element elementor-element-df3c7ed elementor-widget elementor-widget-text-editor"
                        data-id="df3c7ed" data-element_type="widget" data-widget_type="text-editor.default">
                        <p>{{ $donation['content_three'] }}</p>
                    </div>
                    <div class="elementor-element elementor-element-2798272 e-con-full e-flex e-con e-child"
                        data-id="2798272" data-element_type="container">
                        <div class="elementor-element elementor-element-66839b0 e-con-full e-flex e-con e-child"
                            data-id="66839b0" data-element_type="container">
                            <div class="elementor-element elementor-element-9eb7e97 elementor-widget elementor-widget-image"
                                data-id="9eb7e97" data-element_type="widget" data-widget_type="image.default">
                                <img decoding="async" width="370" height="250"
                                    src="{{ asset('images/' . $donation['image_one']) }}"
                                    class="attachment-large size-large wp-image-1197" alt=""
                                    sizes="(max-width: 370px) 100vw, 370px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c869f0c e-con-full e-flex e-con e-child"
                            data-id="c869f0c" data-element_type="container">
                            <div class="elementor-element elementor-element-5b9886a elementor-widget elementor-widget-image"
                                data-id="5b9886a" data-element_type="widget" data-widget_type="image.default">
                                <img decoding="async" width="370" height="250"
                                    src="{{ asset('images/' . $donation['image_two']) }}"
                                    class="attachment-large size-large wp-image-1196" alt=""
                                    sizes="(max-width: 370px) 100vw, 370px" />
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5fab6c3 elementor-widget elementor-widget-text-editor"
                        data-id="5fab6c3" data-element_type="widget" data-widget_type="text-editor.default">
                        {{ $donation['content_four'] }} </div>
                    <div class="elementor-element elementor-element-f91e677 elementor-widget elementor-widget-carit-donation-details"
                        data-id="f91e677" data-element_type="widget" data-widget_type="carit-donation-details.default">
                        <div class="elementor-widget-container">
                            <div class="donation-details__donation" style="background-image: url();">
                                <div class="donation-details__donation__info wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="00ms">
                                    <div class="donation-details__donation__icon">
                                        <span aria-hidden="true" class="icon-money-save"></span>
                                    </div><!-- /.donation-details__donation__icon -->
                                    <div class="donation-details__donation__content">
                                        <h4 class="donation-details__donation__title">Raised</h4>
                                        <p class="donation-details__donation__text">&#036;{{ $donation['donation'] }}</p>
                                    </div><!-- /.donation-details__donation__content -->
                                </div><!-- /.donation-details__donation__info -->
                                <div class="donation-details__donation__info wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="200ms">
                                    <div class="donation-details__donation__icon">
                                        <span aria-hidden="true" class="icon-trade-1"></span>
                                    </div><!-- /.donation-details__donation__icon -->
                                    <div class="donation-details__donation__content">
                                        <h4 class="donation-details__donation__title">Goal</h4>
                                        <p class="donation-details__donation__text">&#036;{{ $donation['goal'] }}</p>
                                    </div><!-- /.donation-details__donation__content -->
                                </div><!-- /.donation-details__donation__info -->
                                <div class="donation-details__donation__button wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="400ms">
                                    <div id="give-form-354-wrap"
                                        class="give-form-wrap give-display-button give-display-button-only">
                                        <div class="give_error give_warning" id="give_error_test_mode">
                                            <p>{{ $donation['content_five'] }}</p>
                                        </div>
                                        <form id="give-form-354-1" class="give-form give-form-354 give-form-type-multi"
                                            method="post" action="{{ route('donation.submit') }}">
                                            @csrf

                                            <input type="hidden" name="donation_id" value="{{ $donation['id'] }}">

                                            <div class="give-total-wrap">
                                                <div class="give-donation-amount form-row-wide">
                                                    <span
                                                        class="give-currency-symbol give-currency-position-before">&#036;</span>
                                                    <label class="give-hidden" for="give-amount">Donation Amount:</label>
                                                    <input class="give-text-input give-amount-top" id="give-amount"
                                                        name="amount" type="number" inputmode="decimal" placeholder=""
                                                        value="100.00" autocomplete="off">
                                                </div>
                                            </div>

                                            <fieldset id="give-payment-mode-select">
                                                <legend class="give-payment-mode-label">Select Payment Method <span
                                                        class="give-loading-text"><span
                                                            class="give-loading-animation"></span>
                                                    </span>
                                                </legend>
                                            </fieldset>

                                            <div>
                                                {{-- Payment Mode --}}
                                                <label>
                                                    <input type="radio" name="payment_mode" value="online" checked>
                                                    Online Donation
                                                </label>

                                                <label>
                                                    <input type="radio" name="payment_mode" value="offline">
                                                    Offline Donation
                                                </label>

                                                {{-- ONLINE OPTIONS --}}
                                                <div id="online-options">
                                                    @foreach ($options as $opt)
                                                        @if ($opt['show'])
                                                            <label>
                                                                <input type="radio" name="payment_option"
                                                                    value="{{ $opt['slug'] }}">
                                                                {{ $opt['name'] }}
                                                            </label>

                                                            <div class="hidden option-details"
                                                                data-option="{{ $opt['slug'] }}">
                                                                <img src="/images/{{ $opt['image'] }}" width="60">
                                                                <p><strong>Address:</strong> {{ $opt['address'] }}</p>
                                                                <p><strong>Network:</strong>
                                                                    {{ strtoupper($opt['network']) }}</p>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>


                                                {{-- OFFLINE INFO --}}
                                                <div id="offline-info" class="hidden">
                                                    <p>
                                                        Send cheque to:<br>
                                                        <strong>Ukraine Relief Fund</strong><br>
                                                        12 Charity Street, London, UK
                                                    </p>
                                                </div>

                                            </div>


                                            <div id="give_purchase_form_wrap">

                                                <fieldset id="give_checkout_user_info" class="">
                                                    <legend>
                                                        Personal Info </legend>


                                                    <p id="give-first-name-wrap"
                                                        class="form-row form-row-first form-row-responsive">
                                                        <label class="give-label" for="give-first">
                                                            First Name <span class="give-required-indicator">*</span>
                                                            <span class="give-tooltip hint--top hint--medium hint--bounce"
                                                                aria-label="First Name is used to personalize your donation record."
                                                                rel="tooltip"><i
                                                                    class="give-icon give-icon-question"></i></span>
                                                        </label>
                                                        <input class="give-input required" type="text"
                                                            name="first_name" autocomplete="given-name"
                                                            placeholder="First Name" id="give-first" value=""
                                                            required aria-required="true" />
                                                    </p>

                                                    <p id="give-last-name-wrap"
                                                        class="form-row form-row-last form-row-responsive">
                                                        <label class="give-label" for="give-last">
                                                            Last Name <span
                                                                class="give-tooltip hint--top hint--medium hint--bounce"
                                                                aria-label="Last Name is used to personalize your donation record."
                                                                rel="tooltip"><i
                                                                    class="give-icon give-icon-question"></i></span>
                                                        </label>

                                                        <input class="give-input" type="text" name="last_name"
                                                            autocomplete="family-name" id="give-last"
                                                            placeholder="Last Name" value="" />
                                                    </p>


                                                    <p id="give-email-wrap" class="form-row form-row-wide">
                                                        <label class="give-label" for="give-email">
                                                            Email Address <span class="give-required-indicator">*</span>
                                                            <span class="give-tooltip hint--top hint--medium hint--bounce"
                                                                aria-label="We will send the donation receipt to this address."
                                                                rel="tooltip"><i
                                                                    class="give-icon give-icon-question"></i></span>
                                                        </label>
                                                        <input class="give-input required" type="email" name="email"
                                                            autocomplete="email" placeholder="Email Address"
                                                            id="give-email" value="" required
                                                            aria-required="true" />

                                                    </p>


                                                </fieldset>
                                                <fieldset id="give_purchase_submit" class="give-donation-submit">
                                                    <p id="give-final-total-wrap" class="form-wrap ">
                                                        <span class="give-donation-total-label">
                                                            Donation Total: </span>
                                                        <span class="give-final-total-amount" data-total="30.00"
                                                            id="final-total">
                                                            &#36;100.00</span>
                                                    </p>

                                                    <div class="give-submit-button-wrap give-clearfix">
                                                        <button type="button" id="donate-btn"
                                                            class="give-submit give-btn">
                                                            Donate Now
                                                        </button>
                                                        <span class="give-loading-animation"></span>
                                                    </div>
                                                </fieldset>

                                            </div>

                                        </form>

                                        <script>
                                            function showToast(message, type = 'success') {
                                                const toast = document.getElementById('toast');
                                                toast.textContent = message;
                                                toast.className =
                                                    'fixed top-5 right-5 px-4 py-3 rounded-lg shadow-lg text-white z-50 ' +
                                                    (type === 'success' ? 'bg-green-600' : 'bg-red-600');
                                                toast.classList.remove('hidden');

                                                setTimeout(() => toast.classList.add('hidden'), 8000);
                                            }

                                            // Run only after DOM loads
                                            document.addEventListener('DOMContentLoaded', () => {
                                                @if (session('success'))
                                                    showToast(@json(session('success')), 'success');
                                                @endif

                                                @if (session('error'))
                                                    showToast(@json(session('error')), 'error');
                                                @endif
                                            });
                                        </script>


                                        <script>
                                            const amountInput = document.getElementById('give-amount');
                                            const totalSpan = document.getElementById('final-total');

                                            function formatAmount(value) {
                                                const num = parseFloat(value);
                                                return isNaN(num) ? '0.00' : num.toFixed(2);
                                            }

                                            amountInput.addEventListener('input', () => {
                                                totalSpan.textContent = `$ ${formatAmount(amountInput.value)}`;
                                            });
                                        </script>

                                        <script>
                                            const modeRadios = document.querySelectorAll('[name="payment_mode"]');
                                            const onlineBox = document.getElementById('online-options');
                                            const offlineBox = document.getElementById('offline-info');
                                            const optionRadios = document.querySelectorAll('[name="payment_option"]');

                                            modeRadios.forEach(r => {
                                                r.addEventListener('change', () => {
                                                    onlineBox.classList.toggle('hidden', r.value !== 'online');
                                                    offlineBox.classList.toggle('hidden', r.value !== 'offline');
                                                });
                                            });

                                            optionRadios.forEach(r => {
                                                r.addEventListener('change', () => {
                                                    document.querySelectorAll('.option-details')
                                                        .forEach(d => d.classList.add('hidden'));
                                                    document
                                                        .querySelector(`[data-option="${r.value}"]`)
                                                        ?.classList.remove('hidden');
                                                });
                                            });
                                        </script>
                                        <script>
                                            document.getElementById('donate-btn').addEventListener('click', function() {
                                                const form = document.getElementById('give-form-354-1');

                                                // Optional: basic validation
                                                if (!form.checkValidity()) {
                                                    form.reportValidity();
                                                    return;
                                                }

                                                form.submit(); // bypass GiveWP JS
                                            });
                                        </script>





                                        <button type="button" class="give-btn give-btn-modal">Donate Now</button>
                                    </div><!--end #give-form-354-->
                                </div><!-- /.donation-details__donation__button -->
                            </div><!-- /.donation-details__donation -->
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-92ae82d elementor-widget elementor-widget-text-editor"
                        data-id="92ae82d" data-element_type="widget" data-widget_type="text-editor.default">
                        {{ $donation['content_six'] }} </div>
                    <div class="elementor-element elementor-element-3d783b5 elementor-widget elementor-widget-text-editor"
                        data-id="3d783b5" data-element_type="widget" data-widget_type="text-editor.default">
                        <p>
                            {{ $donation['content_seven'] }}
                        </p>
                    </div>
                    <div class="elementor-element elementor-element-d90b9c8 elementor-widget elementor-widget-carit-donation-details"
                        data-id="d90b9c8" data-element_type="widget" data-widget_type="carit-donation-details.default">
                        <div class="elementor-widget-container">

                            <div id="comments" class="comments-area">

                                <div id="respond" class="comment-respond">
                                    <h3 class="comment-form__title">Leave a Comment <small><a rel="nofollow"
                                                id="cancel-comment-reply-link"
                                                href="/donations/upport-for-vulnerable-populations-01/#respond"
                                                style="display:none;">Cancel reply</a></small></h3>
                                    <form action="" method="post" id="commentform"
                                        class="reply-form row form-one">
                                        <p class="cnotes">Your email address will not be published. Required fields are
                                            marked *</p>
                                        <div class="col-md-6 name-field">
                                            <div class="blog-details__comment-form__input-box"> <input type="text"
                                                    name="author" id="name" value=""
                                                    placeholder="Your name *"> </div>
                                        </div>
                                        <div class="col-md-6 email-field">
                                            <div class="blog-details__comment-form__input-box"> <input type="email"
                                                    name="email" id="email" value=""
                                                    placeholder="Email address *"> </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="blog-details__comment-form__input-box">
                                                <textarea name="comment" id="comment" class="message" placeholder="Write comment"></textarea>
                                            </div>
                                        </div>
                                        <p class="form-submit"><button type="submit" class="carit-btn"><span></span>
                                                Submit Comment</button> <input type='hidden' name='comment_post_ID'
                                                value='354' id='comment_post_ID' />
                                            <input type='hidden' name='comment_parent' id='comment_parent'
                                                value='0' />
                                        </p>
                                    </form>
                                </div><!-- #respond -->

                            </div><!-- #comments -->
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-36a6d5e e-con-full e-flex e-con e-child" data-id="36a6d5e"
                    data-element_type="container">
                    <div class="elementor-element elementor-element-a5c9adf elementor-widget elementor-widget-sidebar"
                        data-id="a5c9adf" data-element_type="widget" data-widget_type="sidebar.default">

                        <div id="carit_blog_categories_widget-4" class="widget widget_carit_blog_categories_widget">
                            <h3 class="widgettitle widget-title">Categories</h3>
                            <ul class="ml-0 sidebar__categories list-unstyled">
                                @foreach ($categories as $c)
                                    <li>
                                        <a href="{{ route('donation', ['category' => $c['name']]) }}">
                                            {{ $c['name'] }}
                                        </a>
                                        <i class="icon-next"></i>
                                    </li>
                                @endforeach
                            </ul><!-- /.sidebar__categories list-unstyled -->
                        </div>
                        <div id="block-6" class="widget widget_block">
                            <div class="wp-block-contact-form-7-contact-form-selector donation-contact-style">
                                <div class="wpcf7 no-js" id="wpcf7-f1032-p354-o1" lang="en-US" dir="ltr"
                                    data-wpcf7-id="1032">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form"
                                        id="contact-form">
                                        @csrf

                                        <div class="service-sidebar__single">
                                            <h3 class="service-sidebar__title">Get In Touch</h3>

                                            <div class="form-one__group">
                                                <div class="form-one__control form-one__control--full">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Full Name" required>
                                                </div>

                                                <div class="form-one__control form-one__control--full">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email" required>
                                                </div>

                                                <div class="form-one__control form-one__control--full">
                                                    <textarea name="message" rows="5" class="form-control" placeholder="Message" required></textarea>
                                                </div>

                                                <div class="form-one__control form-one__control--full">
                                                    <button type="button" class="carit-btn carit-btn--base"
                                                        id="contact-btn">
                                                        Get In Touch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                    </form>

                                    <script>
                                        document.getElementById('contact-btn').addEventListener('click', function() {
                                            const form = document.getElementById('contact-form');

                                            // Optional: basic validation
                                            if (!form.checkValidity()) {
                                                form.reportValidity();
                                                return;
                                            }

                                            form.submit(); // bypass GiveWP JS
                                        });
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('footer_links')
    <div id="woosw_wishlist" class="woosw-popup woosw-popup-center"></div>
    <script>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-10.4.0'
        media='all' />
    <link rel='stylesheet' id='elementor-post-915-css'
        href='https://caritwp.bracketweb.com/wp-content/uploads/elementor/css/post-915.css?ver=1766544802'
        media='all' />
    <link rel='stylesheet' id='elementor-post-995-css'
        href='https://caritwp.bracketweb.com/wp-content/uploads/elementor/css/post-995.css?ver=1766544802'
        media='all' />
    <link rel='stylesheet' id='elementor-post-884-css'
        href='https://caritwp.bracketweb.com/wp-content/uploads/elementor/css/post-884.css?ver=1765613410'
        media='all' />
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.1.4"
        id="swv-js"></script>
    <script id="contact-form-7-js-before">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/caritwp.bracketweb.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        //# sourceURL=contact-form-7-js-before
    </script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.1.4"
        id="contact-form-7-js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js?ver=1768374883" id="js-cookie-js">
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/layerdrops-toolbar/assets/js/jQuery.style.switcher.min.js?ver=1768374883"
        id="jquery-style-switcher-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/layerdrops-toolbar/assets/js/color-switcher.js?ver=1768374883"
        id="layerdrops-toolbar-color-switcher-js"></script>
    <script id="give-donation-summary-script-frontend-js-extra">
        var GiveDonationSummaryData = {
            "currencyPrecisionLookup": {
                "USD": 2,
                "EUR": 2,
                "GBP": 2,
                "AUD": 2,
                "BRL": 2,
                "CAD": 2,
                "CZK": 2,
                "DKK": 2,
                "HKD": 2,
                "HUF": 2,
                "ILS": 2,
                "JPY": 0,
                "MYR": 2,
                "MXN": 2,
                "MAD": 2,
                "NZD": 2,
                "NOK": 2,
                "PHP": 2,
                "PLN": 2,
                "SGD": 2,
                "KRW": 0,
                "ZAR": 2,
                "SEK": 2,
                "CHF": 2,
                "TWD": 2,
                "THB": 2,
                "INR": 2,
                "TRY": 2,
                "IRR": 2,
                "RUB": 2,
                "AED": 2,
                "AMD": 2,
                "ANG": 2,
                "ARS": 2,
                "AWG": 2,
                "BAM": 2,
                "BDT": 2,
                "BHD": 3,
                "BMD": 2,
                "BND": 2,
                "BOB": 2,
                "BSD": 2,
                "BWP": 2,
                "BZD": 2,
                "CLP": 0,
                "CNY": 2,
                "COP": 2,
                "CRC": 2,
                "CUC": 2,
                "CUP": 2,
                "DOP": 2,
                "EGP": 2,
                "GIP": 2,
                "GTQ": 2,
                "HNL": 2,
                "HRK": 2,
                "IDR": 2,
                "ISK": 0,
                "JMD": 2,
                "JOD": 2,
                "KES": 2,
                "KWD": 2,
                "KYD": 2,
                "MKD": 2,
                "NPR": 2,
                "OMR": 3,
                "PEN": 2,
                "PKR": 2,
                "RON": 2,
                "SAR": 2,
                "SZL": 2,
                "TOP": 2,
                "TZS": 2,
                "TVD": 2,
                "UAH": 2,
                "UYU": 2,
                "VEF": 2,
                "VES": 2,
                "VED": 2,
                "XCD": 2,
                "XCG": 2,
                "XDR": 2,
                "AFN": 2,
                "ALL": 2,
                "AOA": 2,
                "AZN": 2,
                "BBD": 2,
                "BGN": 2,
                "BIF": 0,
                "XBT": 8,
                "BTN": 1,
                "BYR": 2,
                "BYN": 2,
                "CDF": 2,
                "CVE": 2,
                "DJF": 0,
                "DZD": 2,
                "ERN": 2,
                "ETB": 2,
                "FJD": 2,
                "FKP": 2,
                "GEL": 2,
                "GGP": 2,
                "GHS": 2,
                "GMD": 2,
                "GNF": 0,
                "GYD": 2,
                "HTG": 2,
                "IMP": 2,
                "IQD": 2,
                "IRT": 2,
                "JEP": 2,
                "KGS": 2,
                "KHR": 0,
                "KMF": 2,
                "KPW": 0,
                "KZT": 2,
                "LAK": 0,
                "LBP": 2,
                "LKR": 0,
                "LRD": 2,
                "LSL": 2,
                "LYD": 3,
                "MDL": 2,
                "MGA": 0,
                "MMK": 2,
                "MNT": 2,
                "MOP": 2,
                "MRO": 2,
                "MRU": 2,
                "MUR": 2,
                "MVR": 1,
                "MWK": 2,
                "MZN": 0,
                "NAD": 2,
                "NGN": 2,
                "NIO": 2,
                "PAB": 2,
                "PGK": 2,
                "PRB": 2,
                "PYG": 2,
                "QAR": 2,
                "RSD": 2,
                "RWF": 2,
                "SBD": 2,
                "SCR": 2,
                "SDG": 2,
                "SHP": 2,
                "SLL": 2,
                "SLE": 2,
                "SOS": 2,
                "SRD": 2,
                "SSP": 2,
                "STD": 2,
                "STN": 2,
                "SVC": 2,
                "SYP": 2,
                "TJS": 2,
                "TMT": 2,
                "TND": 3,
                "TTD": 2,
                "UGX": 2,
                "UZS": 2,
                "VND": 1,
                "VUV": 0,
                "WST": 2,
                "XAF": 2,
                "XOF": 2,
                "XPF": 2,
                "YER": 2,
                "ZMW": 2,
                "ZWL": 2
            },
            "recurringLabelLookup": []
        };
        //# sourceURL=give-donation-summary-script-frontend-js-extra
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/give/build/assets/dist/js/give-donation-summary.js?ver=4.13.2"
        id="give-donation-summary-script-frontend-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/vendor/react.min.js?ver=18.3.1.1" id="react-js">
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/vendor/react-jsx-runtime.min.js?ver=18.3.1"
        id="react-jsx-runtime-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/url.min.js?ver=9e178c9516d1222dc834" id="wp-url-js">
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/api-fetch.min.js?ver=3a4d9af2b423048b0dee"
        id="wp-api-fetch-js"></script>

    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.3.1.1" id="react-dom-js">
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/dom-ready.min.js?ver=f77871ff7694fffea381"
        id="wp-dom-ready-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/a11y.min.js?ver=cb460b4676c94bd228ed" id="wp-a11y-js">
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/blob.min.js?ver=9113eed771d446f4a556" id="wp-blob-js">
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-includes/js/dist/block-serialization-default-parser.min.js?ver=14d44daebf663d05d330"
        id="wp-block-serialization-default-parser-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/autop.min.js?ver=9fb50649848277dd318d" id="wp-autop-js">
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/deprecated.min.js?ver=e1f84915c5e8ae38964c"
        id="wp-deprecated-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/dom.min.js?ver=26edef3be6483da3de2e" id="wp-dom-js">
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/escape-html.min.js?ver=6561a406d2d232a6fbd2"
        id="wp-escape-html-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/element.min.js?ver=6a582b0c827fa25df3dd"
        id="wp-element-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/is-shallow-equal.min.js?ver=e0f9f1d78d83f5196979"
        id="wp-is-shallow-equal-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/keycodes.min.js?ver=34c8fb5e7a594a1c8037"
        id="wp-keycodes-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/priority-queue.min.js?ver=2d59d091223ee9a33838"
        id="wp-priority-queue-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/compose.min.js?ver=7a9b375d8c19cf9d3d9b"
        id="wp-compose-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/private-apis.min.js?ver=4f465748bda624774139"
        id="wp-private-apis-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/redux-routine.min.js?ver=8bb92d45458b29590f53"
        id="wp-redux-routine-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/data.min.js?ver=f940198280891b0b6318" id="wp-data-js">
    </script>
    <script id="wp-data-js-after">
        (function() {
            var userId = 0;
            var storageKey = "WP_DATA_USER_" + userId;
            wp.data
                .use(wp.data.plugins.persistence, {
                    storageKey: storageKey
                });
        })();
        //# sourceURL=wp-data-js-after
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/html-entities.min.js?ver=e8b78b18a162491d5e5f"
        id="wp-html-entities-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/rich-text.min.js?ver=5bdbb44f3039529e3645"
        id="wp-rich-text-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/shortcode.min.js?ver=0b3174183b858f2df320"
        id="wp-shortcode-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/warning.min.js?ver=d69bc18c456d01c11d5a"
        id="wp-warning-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/blocks.min.js?ver=de131db49fa830bc97da"
        id="wp-blocks-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/vendor/moment.min.js?ver=2.30.1" id="moment-js">
    </script>
    <script id="moment-js-after">
        moment.updateLocale('en_US', {
            "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ],
            "monthsShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "weekdaysShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "week": {
                "dow": 1
            },
            "longDateFormat": {
                "LT": "g:i a",
                "LTS": null,
                "L": null,
                "LL": "F j, Y",
                "LLL": "F j, Y g:i a",
                "LLLL": null
            }
        });
        //# sourceURL=moment-js-after
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/date.min.js?ver=795a56839718d3ff7eae" id="wp-date-js">
    </script>
    <script id="wp-date-js-after">
        wp.date.setSettings({
            "l10n": {
                "locale": "en_US",
                "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"
                ],
                "monthsShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "weekdaysShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "meridiem": {
                    "am": "am",
                    "pm": "pm",
                    "AM": "AM",
                    "PM": "PM"
                },
                "relative": {
                    "future": "%s from now",
                    "past": "%s ago",
                    "s": "a second",
                    "ss": "%d seconds",
                    "m": "a minute",
                    "mm": "%d minutes",
                    "h": "an hour",
                    "hh": "%d hours",
                    "d": "a day",
                    "dd": "%d days",
                    "M": "a month",
                    "MM": "%d months",
                    "y": "a year",
                    "yy": "%d years"
                },
                "startOfWeek": 1
            },
            "formats": {
                "time": "g:i a",
                "date": "F j, Y",
                "datetime": "F j, Y g:i a",
                "datetimeAbbreviated": "M j, Y g:i a"
            },
            "timezone": {
                "offset": 0,
                "offsetFormatted": "0",
                "string": "",
                "abbr": ""
            }
        });
        //# sourceURL=wp-date-js-after
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/primitives.min.js?ver=0b5dcc337aa7cbf75570"
        id="wp-primitives-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/components.min.js?ver=ad5cb4227f07a3d422ad"
        id="wp-components-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/keyboard-shortcuts.min.js?ver=fbc45a34ce65c5723afa"
        id="wp-keyboard-shortcuts-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/commands.min.js?ver=cac8f4817ab7cea0ac49"
        id="wp-commands-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/notices.min.js?ver=f62fbf15dcc23301922f"
        id="wp-notices-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/preferences-persistence.min.js?ver=e954d3a4426d311f7d1a"
        id="wp-preferences-persistence-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/preferences.min.js?ver=2ca086aed510c242a1ed"
        id="wp-preferences-js"></script>
    <script id="wp-preferences-js-after">
        (function() {
            var serverData = false;
            var userId = "0";
            var persistenceLayer = wp.preferencesPersistence.__unstableCreatePersistenceLayer(serverData, userId);
            var preferencesStore = wp.preferences.store;
            wp.data.dispatch(preferencesStore).setPersistenceLayer(persistenceLayer);
        })();
        //# sourceURL=wp-preferences-js-after
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/style-engine.min.js?ver=7c6fcedc37dadafb8a81"
        id="wp-style-engine-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/token-list.min.js?ver=cfdf635a436c3953a965"
        id="wp-token-list-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/block-editor.min.js?ver=6ab992f915da9674d250"
        id="wp-block-editor-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/dist/core-data.min.js?ver=15baadfe6e1374188072"
        id="wp-core-data-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/give/build/entitiesPublic.js?ver=b759f2adda1f29c50713"
        id="givewp-entities-public-js"></script>
    <script id="wc-add-to-cart-variation-js-extra">
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination.",
            "i18n_reset_alert_text": "Your selection has been reset. Please select some product options before adding this product to your cart."
        };
        //# sourceURL=wc-add-to-cart-variation-js-extra
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=10.4.0"
        id="wc-add-to-cart-variation-js" data-wp-strategy="defer"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min.js?ver=4.2.8"
        id="slick-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js?ver=4.2.8"
        id="perfect-scrollbar-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min.js?ver=4.2.8"
        id="magnific-popup-js"></script>
    <script id="woosq-frontend-js-extra">
        var woosq_vars = {
            "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
            "nonce": "8ba5b98d2d",
            "view": "popup",
            "effect": "mfp-3d-unfold",
            "scrollbar": "yes",
            "auto_close": "yes",
            "hashchange": "no",
            "cart_redirect": "no",
            "cart_url": "https://caritwp.bracketweb.com/carit-cart/",
            "close": "Close (Esc)",
            "next_prev": "yes",
            "next": "Next (Right arrow key)",
            "prev": "Previous (Left arrow key)",
            "thumbnails_effect": "no",
            "related_slick_params": "{\"slidesToShow\":2,\"slidesToScroll\":2,\"dots\":true,\"arrows\":false,\"adaptiveHeight\":true,\"rtl\":false}",
            "thumbnails_slick_params": "{\"slidesToShow\":1,\"slidesToScroll\":1,\"dots\":true,\"arrows\":true,\"adaptiveHeight\":false,\"rtl\":false}",
            "thumbnails_zoom_params": "{\"duration\":120,\"magnify\":1}",
            "quick_view": "0"
        };
        //# sourceURL=woosq-frontend-js-extra
    </script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-quick-view/assets/js/frontend.js?ver=4.2.8"
        id="woosq-frontend-js"></script>
    <script id="woosw-frontend-js-extra">
        var woosw_vars = {
            "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
            "nonce": "dd036ca062",
            "added_to_cart": "no",
            "auto_remove": "no",
            "page_myaccount": "yes",
            "menu_action": "open_page",
            "reload_count": "no",
            "perfect_scrollbar": "yes",
            "wishlist_url": "https://caritwp.bracketweb.com/wishlist/",
            "button_action": "list",
            "message_position": "right-top",
            "button_action_added": "popup",
            "empty_confirm": "This action cannot be undone. Are you sure?",
            "delete_confirm": "This action cannot be undone. Are you sure?",
            "copied_text": "Copied the wishlist link:",
            "menu_text": "Wishlist",
            "button_text": "Add to wishlist",
            "button_text_added": "Browse wishlist",
            "button_normal_icon": "woosw-icon-5",
            "button_added_icon": "woosw-icon-8",
            "button_loading_icon": "woosw-icon-4"
        };
        //# sourceURL=woosw-frontend-js-extra
    </script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/woo-smart-wishlist/assets/js/frontend.js?ver=5.0.8"
        id="woosw-frontend-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=10.4.0"
        id="sourcebuster-js-js"></script>

    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=10.4.0"
        id="wc-order-attribution-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.33.4"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.33.4"
        id="elementor-frontend-modules-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js">
    </script>

    <script src="https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.33.4"
        id="elementor-frontend-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.3"
        id="jquery-ui-datepicker-js"></script>
    <script id="jquery-ui-datepicker-js-after">
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
        //# sourceURL=jquery-ui-datepicker-js-after
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/themes/carit/assets/vendors/bootstrap/js/bootstrap.min.js?ver=5.0.0"
        id="bootstrap-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/bootstrap-select/js/bootstrap-select.min.js?ver=1762175362"
        id="bootstrap-select-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/bxslider/jquery.bxslider.min.js?ver=1762175362"
        id="jquery-bxslider-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/countdown/countdown.min.js?ver=1762175362"
        id="countdown-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jarallax/jarallax.min.js?ver=1762175362"
        id="jarallax-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jquery-ui/jquery-ui.js?ver=1762175362"
        id="jquery-ui-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/date-time-picker/jquery.datetimepicker.min.js?ver=1762175362"
        id="datetimepicker-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jquery-validate/jquery.validate.min.js?ver=1762175362"
        id="jquery.validate-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/wnumb/wNumb.min.js?ver=1762175362"
        id="wNumb-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/gsap/gsap.js?ver=1762175362"
        id="gsap-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/gsap/scrolltrigger.min.js?ver=1762175362"
        id="scrolltrigger-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/gsap/splittext.min.js?ver=1762175362"
        id="splittext-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/gsap/carit-split.js?ver=1765544428"
        id="carit-split-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js?ver=1762175362"
        id="jquery-ajaxchimp-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jquery-appear/jquery.appear.min.js?ver=1762175362"
        id="jquery-appear-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js?ver=1762175362"
        id="jquery-magnific-popup-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/nouislider/nouislider.min.js?ver=1762175362"
        id="nouislider-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/tiny-slider/tiny-slider.js?ver=1762175362"
        id="tiny-slider-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/odometer/odometer.min.js?ver=1762175362"
        id="odometer-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/owl-carousel/owl.carousel.min.js?ver=1762175362"
        id="owl-carousel-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js?ver=1762175362"
        id="jquery-circle-progress-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5"
        id="swiper-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/wow/wow.js?ver=1762175362"
        id="wow-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/aos/aos.js?ver=1762175362"
        id="aos-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/sharer/sharer.min.js?ver=1762175362"
        id="sharer-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/timepicker/timePicker.js?ver=1762175362"
        id="timepicker-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/daterangepicker/daterangepicker.js?ver=1762175362"
        id="daterangepicker-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3-wc.10.4.0"
        id="wc-select2-js" data-wp-strategy="defer"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/slick-carousel/slick.min.js?ver=1762175362"
        id="slick-carousel-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/circleType/jquery.circleType.js?ver=1762175362"
        id="circletype-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/circleType/jquery.lettering.min.js?ver=1762175362"
        id="circleletter-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/vendors/wavesurfer/wavesurfer.js?ver=1765544428"
        id="wavesurfer-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/js/carit-addon.js?ver=1765544428"
        id="carit-addon-script-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/themes/carit/assets/vendors/isotope/isotope.js?ver=2.1.1"
        id="isotope-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/themes/carit/assets/js/carit-theme.js?ver=1768374883"
        id="carit-theme-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/comment-reply.min.js?ver=6.9" id="comment-reply-js" async
        data-wp-strategy="async" fetchpriority="low"></script>
    <script id="wp-emoji-settings" type="application/json">
</script>
@endsection
