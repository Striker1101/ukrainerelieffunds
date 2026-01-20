@extends('layouts.app')

@section('title', 'Sign In')

@section('head')
    <title> {{ config('custom.title', 'Default Title') }} </title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
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
    {{-- <link rel='stylesheet' id='carit-editor-fonts-css'
        href='//fonts.googleapis.com/css?family=Inter%3A400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%7CSora%3A400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%26subset%3Dlatin%2Clatin-ext'
        media='all' /> --}}
    {{-- <link rel='stylesheet' id='fontawesome-css'
        href='https://caritwp.bracketweb.com/wp-content/themes/carit/assets/vendors/fontawesome/css/all.min.css?ver=5.15.1'
        media='all' /> --}}
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
        href='https://caritwp.bracketweb.com/wp-content/plugins/layerdrops-toolbar/assets/css/layerdrops-toolbar.css?ver=1768347138'
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
    <link rel='stylesheet' id='elementor-post-65-css'
        href='https://caritwp.bracketweb.com/wp-content/uploads/elementor/css/post-65.css?ver=1765613410'
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
        href='https://caritwp.bracketweb.com/wp-content/themes/carit/style.css?ver=1768347138' media='all' />
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

        .page-header__bg {
            background-image: url(https://caritwp.bracketweb.com/wp-content/uploads/2025/11/page-header-bg-1-1.jpg);
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
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            "ajax_url": "/wp-admin/admin-ajax.php",
            "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https://caritwp.bracketweb.com/carit-cart/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        //# sourceURL=wc-add-to-cart-js-extra
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=10.4.0"
        id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.10.4.0"
        id="wc-js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "/wp-admin/admin-ajax.php",
            "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
            "i18n_password_show": "Show password",
            "i18n_password_hide": "Hide password"
        };
        //# sourceURL=woocommerce-js-extra
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=10.4.0"
        id="woocommerce-js" defer data-wp-strategy="defer"></script>
    <script id="give-js-extra">
        var give_global_vars = {
            "ajaxurl": "https://caritwp.bracketweb.com/wp-admin/admin-ajax.php",
            "checkout_nonce": "6f0e7ac076",
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
                "ajaxurl": "https://caritwp.bracketweb.com/wp-admin/admin-ajax.php",
                "ajaxNonce": "f13043035a",
                "loading": "Loading",
                "select_option": "Please select an option",
                "default_gateway": "manual",
                "permalinks": "1",
                "number_decimals": 2
            },
            "cookie_hash": "85c5d7642981bced02ad8b97c392840f",
            "session_nonce_cookie_name": "wp-give_session_reset_nonce_85c5d7642981bced02ad8b97c392840f",
            "session_cookie_name": "wp-give_session_85c5d7642981bced02ad8b97c392840f",
            "delete_session_nonce_cookie": "0"
        };
        var giveApiSettings = {
            "root": "https://caritwp.bracketweb.com/wp-json/give-api/v2/",
            "rest_base": "give-api/v2"
        };
        //# sourceURL=give-js-extra
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/give/build/assets/dist/js/give.js?ver=8540f4f50a2032d9c5b5"
        id="give-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/underscore.min.js?ver=1.13.7" id="underscore-js"></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {
            "ajax": {
                "url": "/wp-admin/admin-ajax.php"
            }
        };
        //# sourceURL=wp-util-js-extra
    </script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/wp-util.min.js?ver=6.9" id="wp-util-js"></script>
    <link rel="https://api.w.org/" href="https://caritwp.bracketweb.com/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json"
        href="https://caritwp.bracketweb.com/wp-json/wp/v2/pages/65" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://caritwp.bracketweb.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.9" />
    <meta name="generator" content="WooCommerce 10.4.0" />
    <link rel="canonical" href="https://caritwp.bracketweb.com/" />
    <link rel='shortlink' href='https://caritwp.bracketweb.com/' />
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

    <div data-elementor-type="wp-page" data-elementor-id="65" class="elementor elementor-65">
        <div class="elementor-element elementor-element-57b2a37 e-con-full e-flex e-con e-parent" data-id="57b2a37"
            data-element_type="container">
            <div class="elementor-element elementor-element-4f4f6d5 elementor-widget elementor-widget-carit-main-slider"
                data-id="4f4f6d5" data-element_type="widget" data-widget_type="carit-main-slider.default">
                <div class="elementor-widget-container">

                    <!-- main-slider-start -->
                    <section class="main-slider-one" id="home">
                        <div class="main-slider-one__carousel carit-owl__carousel owl-carousel"
                            data-owl-options='{&quot;loop&quot;:true,&quot;margin&quot;:0,&quot;items&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:true,&quot;smartSpeed&quot;:700,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;animateOut&quot;:&quot;fadeOut&quot;,&quot;animateIn&quot;:&quot;fadeIn&quot;,&quot;autoplayHoverPause&quot;:true}'>
                            <div class="item">
                                <div class="main-slider-one__item">
                                    <div class="main-slider-one__bg"
                                        style="background-image: url(https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-1-1.jpg);">
                                    </div><!-- /.main-slider-one__bg -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="main-slider-one__content">
                                                    <h5 class="main-slider-one__tagline"> <i aria-hidden="true"
                                                            class="icon-love-safe"></i> We
                                                        Need Your Help</h5>
                                                    <h2 class="main-slider-one__title">Changing Lives For The
                                                        Better</h2><!-- /.main-slider-one__title -->
                                                    <p class="main-slider-one__text">In regions affected by
                                                        conflict and disaster, access to healthcare and
                                                        psychological support is crucial. We support initiatives
                                                        that offer medical care, counseling, and emotional
                                                        support to children and families. For example, in
                                                        war-torn areas like Gaza and Israel,</p>
                                                    <!-- /.main-slider-one__text -->
                                                    <div class="main-slider-one__btn">
                                                        <a href="https://caritwp.bracketweb.com/donations-page/"
                                                            class="carit-btn"><span></span>Donate now</a>
                                                    </div><!-- /.main-slider-one__btn -->
                                                    <div class="main-slider-one__arrow">
                                                        <img decoding="async"
                                                            src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-arrow-1-1.png"
                                                            alt="hero-arrow-1-1" title="hero-arrow-1-1">
                                                    </div><!-- /.main-slider-one__arrow -->
                                                </div><!-- /.main-slider-one__content -->
                                            </div><!-- /.col-xl-6 -->
                                            <div class="col-xl-5">
                                                <div class="main-slider-one__image">
                                                    <img decoding="async"
                                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-image-1-1.png"
                                                        alt="hero-image-1-1" title="hero-image-1-1">
                                                </div><!-- /.main-slider-one__image -->
                                            </div><!-- /.col-xl-6 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="main-slider-one__item">
                                    <div class="main-slider-one__bg"
                                        style="background-image: url(https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-1-1.jpg);">
                                    </div><!-- /.main-slider-one__bg -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="main-slider-one__content">
                                                    <h5 class="main-slider-one__tagline"> <i aria-hidden="true"
                                                            class="icon-love-safe"></i> We
                                                        Need Your Help</h5>
                                                    <h2 class="main-slider-one__title">Changing Lives For The
                                                        Better</h2><!-- /.main-slider-one__title -->
                                                    <p class="main-slider-one__text">In regions affected by
                                                        conflict and disaster, access to healthcare and
                                                        psychological support is crucial. We support initiatives
                                                        that offer medical care, counseling, and emotional
                                                        support to children and families. For example, in
                                                        war-torn areas like Gaza and Israel,</p>
                                                    <!-- /.main-slider-one__text -->
                                                    <div class="main-slider-one__btn">
                                                        <a href="https://caritwp.bracketweb.com/donations-page/"
                                                            class="carit-btn"><span></span>Donate now</a>
                                                    </div><!-- /.main-slider-one__btn -->
                                                    <div class="main-slider-one__arrow">
                                                        <img decoding="async"
                                                            src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-arrow-1-1.png"
                                                            alt="hero-arrow-1-1" title="hero-arrow-1-1">
                                                    </div><!-- /.main-slider-one__arrow -->
                                                </div><!-- /.main-slider-one__content -->
                                            </div><!-- /.col-xl-6 -->
                                            <div class="col-xl-5">
                                                <div class="main-slider-one__image">
                                                    <img decoding="async"
                                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-image-1-1.png"
                                                        alt="hero-image-1-1" title="hero-image-1-1">
                                                </div><!-- /.main-slider-one__image -->
                                            </div><!-- /.col-xl-6 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="main-slider-one__item">
                                    <div class="main-slider-one__bg"
                                        style="background-image: url(https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-1-1.jpg);">
                                    </div><!-- /.main-slider-one__bg -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="main-slider-one__content">
                                                    <h5 class="main-slider-one__tagline"> <i aria-hidden="true"
                                                            class="icon-love-safe"></i> We
                                                        Need Your Help</h5>
                                                    <h2 class="main-slider-one__title">Changing Lives For The
                                                        Better</h2><!-- /.main-slider-one__title -->
                                                    <p class="main-slider-one__text">In regions affected by
                                                        conflict and disaster, access to healthcare and
                                                        psychological support is crucial. We support initiatives
                                                        that offer medical care, counseling, and emotional
                                                        support to children and families. For example, in
                                                        war-torn areas like Gaza and Israel,</p>
                                                    <!-- /.main-slider-one__text -->
                                                    <div class="main-slider-one__btn">
                                                        <a href="https://caritwp.bracketweb.com/donations-page/"
                                                            class="carit-btn"><span></span>Donate now</a>
                                                    </div><!-- /.main-slider-one__btn -->
                                                    <div class="main-slider-one__arrow">
                                                        <img decoding="async"
                                                            src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-arrow-1-1.png"
                                                            alt="hero-arrow-1-1" title="hero-arrow-1-1">
                                                    </div><!-- /.main-slider-one__arrow -->
                                                </div><!-- /.main-slider-one__content -->
                                            </div><!-- /.col-xl-6 -->
                                            <div class="col-xl-5">
                                                <div class="main-slider-one__image">
                                                    <img decoding="async"
                                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/hero-image-1-1.png"
                                                        alt="hero-image-1-1" title="hero-image-1-1">
                                                </div><!-- /.main-slider-one__image -->
                                            </div><!-- /.col-xl-6 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- main-slider-end -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-8e2b16f e-con-full e-flex e-con e-parent" data-id="8e2b16f"
            data-element_type="container">
            <div class="elementor-element elementor-element-24ead0a elementor-widget elementor-widget-carit-features"
                data-id="24ead0a" data-element_type="widget" data-widget_type="carit-features.default">
                <div class="elementor-widget-container">

                    <section class="feature-one section-space-top">
                        <div class="container">
                            <div class="row gutter-x-24">
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-one__item wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="feature-one__item__icon">
                                            <i aria-hidden="true" class="icon-save-2"></i>
                                        </div><!-- /.feature-one__item__icon -->
                                        <div class="feature-one__item__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/feature-1-1.jpg"
                                                alt="feature-1-1" title="feature-1-1">
                                        </div><!-- /.feature-one__item__image -->
                                        <div class="feature-one__item__content">
                                            <h3 class="feature-one__item__title"><a
                                                    href="https://caritwp.bracketweb.com/donations-page/">Healthcare</a>
                                            </h3><!-- /.feature-one__item__title -->
                                            <p class="feature-one__item__text">Maternal and child health care
                                            </p><!-- /.feature-one__item__text -->
                                        </div><!-- /.feature-one__item__content -->
                                    </div><!-- /.feature-one__item -->
                                </div><!-- /.col-xl-3 -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-one__item active wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="feature-one__item__icon">
                                            <i aria-hidden="true" class="icon-save-2"></i>
                                        </div><!-- /.feature-one__item__icon -->
                                        <div class="feature-one__item__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/feature-1-2.jpg"
                                                alt="feature-1-2" title="feature-1-2">
                                        </div><!-- /.feature-one__item__image -->
                                        <div class="feature-one__item__content">
                                            <h3 class="feature-one__item__title"><a
                                                    href="https://caritwp.bracketweb.com/donations-page/">Healthcare</a>
                                            </h3><!-- /.feature-one__item__title -->
                                            <p class="feature-one__item__text">Maternal and child health care
                                            </p><!-- /.feature-one__item__text -->
                                        </div><!-- /.feature-one__item__content -->
                                    </div><!-- /.feature-one__item -->
                                </div><!-- /.col-xl-3 -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-one__item wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="feature-one__item__icon">
                                            <i aria-hidden="true" class="icon-save-2"></i>
                                        </div><!-- /.feature-one__item__icon -->
                                        <div class="feature-one__item__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/feature-1-3.jpg"
                                                alt="feature-1-3" title="feature-1-3">
                                        </div><!-- /.feature-one__item__image -->
                                        <div class="feature-one__item__content">
                                            <h3 class="feature-one__item__title"><a
                                                    href="https://caritwp.bracketweb.com/donations-page/">Healthcare</a>
                                            </h3><!-- /.feature-one__item__title -->
                                            <p class="feature-one__item__text">Maternal and child health care
                                            </p><!-- /.feature-one__item__text -->
                                        </div><!-- /.feature-one__item__content -->
                                    </div><!-- /.feature-one__item -->
                                </div><!-- /.col-xl-3 -->
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-one__item feature-one__item--two wow fadeInUp"
                                        data-wow-duration='1500ms' data-wow-delay='700ms'>
                                        <h3 class="feature-one__item__title">Donation</h3>
                                        <!-- /.feature-one__item__title -->
                                        <div class="feature-one__item__bottom">
                                            <div class="feature-one__item__left">
                                                <p class="feature-one__item__left__text">Sey Hello!</p>
                                                <!-- /.feature-one__item__left__text -->

                                                <a href="mailto:info@carit.com">Info@Gmail.com</a>
                                            </div><!-- /.feature-one__item__left -->
                                            <div class="feature-one__item__btn">
                                                <a href="https://caritwp.bracketweb.com/donations-page/"><i
                                                        aria-hidden="true" class="icon-hover"></i></a>
                                            </div><!-- /.feature-one__item__right -->
                                        </div><!-- /.feature-one__item__bottom -->
                                    </div><!-- /.feature-one__item -->
                                </div><!-- /.col-xl-3 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.feature-one -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-56be69b e-con-full e-flex e-con e-parent" data-id="56be69b"
            data-element_type="container">
            <div class="elementor-element elementor-element-7a4804f elementor-widget elementor-widget-carit-about-us"
                data-id="7a4804f" data-element_type="widget" data-widget_type="carit-about-us.default">
                <div class="elementor-widget-container">

                    <section class="about-one section-space" id="about">
                        <div class="container">
                            <div class="row align-items-xl-end gutter-y-24">
                                <div class="col-lg-6">
                                    <div class="about-one__content">
                                        <div class="about-one__top">
                                            <div class="sec-title text-start">
                                                <h6 class="sec-title__tagline justify-content-start bw-split-in-up-fast">
                                                    <i aria-hidden="true" class="icon-love-safe"></i> About
                                                    Carit
                                                </h6>
                                                <h3 class="sec-title__title bw-split-in-up">
                                                    Helping is a Great Virtue for Every Human. </h3>
                                                <!-- /.sec-title__title -->
                                            </div><!-- /.sec-title -->
                                            <p class="about-one__text bw-text bw-split-in-down">Helping others
                                                is a fundamental virtue that transcends cultures, religions, and
                                                philosophies. It is an intrinsic part of our humanity and a
                                                cornerstone of a compassionate and just society. When we lend a
                                                hand to those in need,</p><!-- /.about-one__text -->
                                        </div><!-- /.about-one__top -->

                                        <div class="about-one__thumb wow fadeInUp" data-wow-duration='1500ms'
                                            data-wow-delay='100ms'>
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/about-2-1.png"
                                                alt="about-2-1" title="about-2-1">
                                        </div><!-- /.about-one__thumb -->
                                    </div><!-- /.about-one__content -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="about-one__list">
                                        <div class="about-one__list__item">
                                            <div class="about-one__item__round wow fadeInUp" data-wow-duration='1500ms'
                                                data-wow-delay='100ms'>
                                                <a href="https://caritwp.bracketweb.com/" class="about-one__img">
                                                    <img decoding="async"
                                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/logo-shape-base.png"
                                                        alt="logo-shape-base" title="logo-shape-base">
                                                </a><!-- /.about-one__img -->
                                                <div class="circle-text__curved-circle">
                                                    <div class="circle-text__curved-circle__item curved-circle--item"
                                                        data-circle-text-options='{
									"radius": 83,
									"forceWidth": true,
									"forceHeight": true
								}'>
                                                        <span class="lettering-item">RISE YOUR HANDS TION
                                                            FOUNDATI NON PROFIT CHARITY</span>
                                                    </div>
                                                </div><!-- /.circle-text__curved-circle -->
                                            </div><!-- /.about-one__item__round -->
                                            <div class="about-one__item wow fadeInUp" data-wow-duration='1500ms'
                                                data-wow-delay='100ms'>
                                                <div class="about-one__item__icon">
                                                    <i aria-hidden="true" class="icon-lave-hand-1"></i>
                                                </div><!-- /.about-one__icon -->
                                                <div class="about-one__item__content">
                                                    <h4 class="about-one__item__title"><a
                                                            href="https://caritwp.bracketweb.com/donations-page/">Treatment
                                                            Help</a></h4><!-- /.about-one__item__title -->
                                                    <p class="about-one__item__text">Biggest Prayers Community
                                                    </p><!-- /.about-one__item__text -->
                                                    <div class="about-one__item__btn">
                                                        <a href="https://caritwp.bracketweb.com/donations-page/"
                                                            class="carit-btn"><span></span>Read More</a>
                                                    </div><!-- /.about-one__item__btn -->
                                                </div><!-- /.about-one__item__content -->
                                            </div><!-- /.about-one__item -->
                                        </div><!-- /.about-one__list__item -->
                                        <div class="about-one__list__item wow fadeInUp" data-wow-duration='1500ms'
                                            data-wow-delay='100ms'>
                                            <div class="about-one__item">
                                                <div class="about-one__item__icon">
                                                    <i aria-hidden="true" class="icon-love-hand"></i>
                                                </div><!-- /.about-one__icon -->
                                                <div class="about-one__item__content">
                                                    <h4 class="about-one__item__title"><a
                                                            href="https://caritwp.bracketweb.com/donations-page/">Help
                                                            Raising</a></h4><!-- /.about-one__item__title -->
                                                    <p class="about-one__item__text">Biggest Prayers Community
                                                    </p><!-- /.about-one__item__text -->
                                                    <div class="about-one__item__btn">
                                                        <a href="https://caritwp.bracketweb.com/donations-page/"
                                                            class="carit-btn"><span></span>Read More</a>
                                                    </div><!-- /.about-one__item__btn -->
                                                </div><!-- /.about-one__item__content -->
                                            </div><!-- /.about-one__item -->
                                            <div class="about-one__btn">
                                                <a href="https://caritwp.bracketweb.com/donations-page/"
                                                    class="carit-btn"><span></span>View All More</a>
                                            </div><!-- /.about-one__item__btn -->
                                        </div><!-- /.about-one__list__item -->
                                    </div><!-- /.about-one__list -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.about-one -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-aa63132 e-con-full e-flex e-con e-parent" data-id="aa63132"
            data-element_type="container">
            <div class="elementor-element elementor-element-a8f2a03 elementor-widget elementor-widget-carit-client"
                data-id="a8f2a03" data-element_type="widget" data-widget_type="carit-client.default">
                <div class="elementor-widget-container">

                    <section class="prayer-time">
                        <div class="container-fluid">
                            <div class="prayer-time__inner">
                                <div class="prayer-time__inner__left">
                                    <div class="prayer-time__time">
                                        <ul class="ml-0 list-unstyled">
                                            <li>9:00 am</li>
                                            <li>11:30 am</li>
                                            <li>4:30 pm
                                            </li>
                                        </ul>
                                    </div><!-- /.prayer-time__time -->
                                    <div class="prayer-time__item__round wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <a href="https://caritwp.bracketweb.com/" class="prayer-time__img">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/logo-shape-black.png"
                                                alt="logo-shape-black" title="logo-shape-black">
                                        </a><!-- /.prayer-time__img -->
                                        <div class="circle-text__curved-circle">
                                            <div class="circle-text__curved-circle__item curved-circle--item"
                                                data-circle-text-options='{
                            "radius": 73,
                            "forceWidth": true,
                            "forceHeight": true
                        }'>
                                                <span class="lettering-item">RISE YOUR HANDS. FOUNDATION
                                                    NON</span>
                                            </div>
                                        </div><!-- /.circle-text__curved-circle -->
                                    </div><!-- /.prayer-time__item__round -->
                                </div><!-- /.prayer-time__inner__left -->

                                <div class="client-carousel">
                                    <div class="client-carousel__one carit-owl__carousel owl-theme owl-carousel"
                                        data-owl-options='{&quot;loop&quot;:false,&quot;margin&quot;:0,&quot;items&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:false,&quot;smartSpeed&quot;:700,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;animateOut&quot;:&quot;&quot;,&quot;animateIn&quot;:&quot;&quot;,&quot;autoplayHoverPause&quot;:true,&quot;responsive&quot;:{&quot;1599&quot;:{&quot;margin&quot;:60,&quot;stagePadding&quot;:0,&quot;items&quot;:5},&quot;1200&quot;:{&quot;margin&quot;:60,&quot;stagePadding&quot;:0,&quot;items&quot;:4},&quot;992&quot;:{&quot;margin&quot;:60,&quot;stagePadding&quot;:0,&quot;items&quot;:4},&quot;768&quot;:{&quot;margin&quot;:50,&quot;stagePadding&quot;:0,&quot;items&quot;:3},&quot;500&quot;:{&quot;margin&quot;:40,&quot;stagePadding&quot;:0,&quot;items&quot;:2},&quot;431&quot;:{&quot;margin&quot;:30,&quot;stagePadding&quot;:0,&quot;items&quot;:1},&quot;0&quot;:{&quot;margin&quot;:30,&quot;stagePadding&quot;:0,&quot;items&quot;:2}}}'>
                                        <div class="client-carousel__one__item">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-2-1.png"
                                                alt="brand-2-1" title="brand-2-1" class="client-carousel__one__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-2-1.png"
                                                alt="brand-hovewr-2-1" title="brand-hovewr-2-1"
                                                class="client-carousel__one__hover-image">
                                        </div><!-- /.owl-slide-item-->
                                        <div class="client-carousel__one__item">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-2-1.png"
                                                alt="brand-2-1" title="brand-2-1" class="client-carousel__one__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-2-1.png"
                                                alt="brand-hovewr-2-1" title="brand-hovewr-2-1"
                                                class="client-carousel__one__hover-image">
                                        </div><!-- /.owl-slide-item-->
                                        <div class="client-carousel__one__item">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-2-1.png"
                                                alt="brand-2-1" title="brand-2-1" class="client-carousel__one__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-2-1.png"
                                                alt="brand-hovewr-2-1" title="brand-hovewr-2-1"
                                                class="client-carousel__one__hover-image">
                                        </div><!-- /.owl-slide-item-->
                                        <div class="client-carousel__one__item">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-2-1.png"
                                                alt="brand-2-1" title="brand-2-1" class="client-carousel__one__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-2-1.png"
                                                alt="brand-hovewr-2-1" title="brand-hovewr-2-1"
                                                class="client-carousel__one__hover-image">
                                        </div><!-- /.owl-slide-item-->
                                        <div class="client-carousel__one__item">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-2-1.png"
                                                alt="brand-2-1" title="brand-2-1" class="client-carousel__one__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-2-1.png"
                                                alt="brand-hovewr-2-1" title="brand-hovewr-2-1"
                                                class="client-carousel__one__hover-image">
                                        </div><!-- /.owl-slide-item-->
                                    </div><!-- /.thm-owl__slider -->
                                </div><!-- /.client-carousel -->
                            </div><!-- /.prayer-time__inner -->
                        </div><!-- /.container -->
                    </section><!-- /.prayer-time -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-1cdd069 e-con-full e-flex e-con e-parent" data-id="1cdd069"
            data-element_type="container">
            <div class="elementor-element elementor-element-d281b3d elementor-widget elementor-widget-carit-service"
                data-id="d281b3d" data-element_type="widget" data-widget_type="carit-service.default">
                <div class="elementor-widget-container">

                    <section class="service-two section-space " id="services">
                        <div class="container">
                            <div class="service-two__top">
                                <div class="text-center sec-title">
                                    <h6 class="sec-title__tagline justify-content-center bw-split-in-up-fast">
                                        <i aria-hidden="true" class="icon-love-safe"></i>
                                        Our Services
                                    </h6>
                                    <h3 class="sec-title__title bw-split-in-up">
                                        Work Service </h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                                <p class="service-two__top__text bw-text bw-split-in-down">Maecenas ornare
                                    iaculis ultricies. Maecenas eget tristique orci. Praesent imperdiet purus et
                                    sodales volutpat. Proin ultrices, massa eu pulvinar pulvinar.</p>
                                <!-- /.service-two__top__text -->
                            </div><!-- /.service-two__top -->
                            <div class="row gutter-x-24 gutter-y-24">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-two__card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="service-two__card__content">
                                            <div class="service-two__icon">
                                                <i aria-hidden="true" class=" icon-money-save"></i>
                                            </div><!-- /.service-two__icon -->
                                            <p class="service-two__text">Support your chosen cause with a
                                                one-time donation.</p><!-- /.service-two__text -->
                                            <h4 class="service-two__title"><a
                                                    href="https://caritwp.bracketweb.com/service-details/">Flexible
                                                    Giving</a></h4><!-- /.service-two__title -->
                                        </div><!-- /.service-two__card__content -->
                                        <div class="service-two__thumb">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/service-h-1-1.jpg"
                                                alt="service-h-1-1" title="service-h-1-1"> <a
                                                href="https://caritwp.bracketweb.com/service-details/"
                                                class="event-card__thumb__link"><i aria-hidden="true"
                                                    class="icon-hover"></i></a>
                                        </div><!-- /.service-two__thumb -->
                                    </div><!-- /.service-two__card -->
                                </div><!-- /.col-lg-4 -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-two__card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="service-two__thumb">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/service-h-1-2.jpg"
                                                alt="service-h-1-2" title="service-h-1-2"> <a
                                                href="https://caritwp.bracketweb.com/service-details/"
                                                class="event-card__thumb__link"><i aria-hidden="true"
                                                    class="icon-hover"></i></a>
                                        </div><!-- /.service-two__thumb -->
                                        <div class="service-two__card__content">
                                            <div class="service-two__icon">
                                                <i aria-hidden="true" class="icon-trade-1"></i>
                                            </div><!-- /.service-two__icon -->
                                            <p class="service-two__text">Launch your own crowdfunding
                                                campaigns.</p><!-- /.service-two__text -->
                                            <h4 class="service-two__title"><a
                                                    href="https://caritwp.bracketweb.com/service-details/">Personal
                                                    Fundraiser</a></h4><!-- /.service-two__title -->
                                        </div><!-- /.service-two__card__content -->
                                    </div><!-- /.service-two__card -->
                                </div><!-- /.col-lg-4 -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-two__card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="service-two__card__content">
                                            <div class="service-two__icon">
                                                <i aria-hidden="true" class=" icon-love-box"></i>
                                            </div><!-- /.service-two__icon -->
                                            <p class="service-two__text">Support your chosen cause with a
                                                one-time donation.</p><!-- /.service-two__text -->
                                            <h4 class="service-two__title"><a
                                                    href="https://caritwp.bracketweb.com/service-details/">Alternative
                                                    Gifting</a></h4><!-- /.service-two__title -->
                                        </div><!-- /.service-two__card__content -->
                                        <div class="service-two__thumb">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/service-h-1-3.jpg"
                                                alt="service-h-1-3" title="service-h-1-3"> <a
                                                href="https://caritwp.bracketweb.com/service-details/"
                                                class="event-card__thumb__link"><i aria-hidden="true"
                                                    class="icon-hover"></i></a>
                                        </div><!-- /.service-two__thumb -->
                                    </div><!-- /.service-two__card -->
                                </div><!-- /.col-lg-4 -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="service-two__card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="service-two__thumb">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/service-h-1-4.jpg"
                                                alt="service-h-1-4" title="service-h-1-4"> <a
                                                href="https://caritwp.bracketweb.com/service-details/"
                                                class="event-card__thumb__link"><i aria-hidden="true"
                                                    class="icon-hover"></i></a>
                                        </div><!-- /.service-two__thumb -->
                                        <div class="service-two__card__content">
                                            <div class="service-two__icon">
                                                <i aria-hidden="true" class="icon-trade-1"></i>
                                            </div><!-- /.service-two__icon -->
                                            <p class="service-two__text">Launch your own crowdfunding
                                                campaigns.</p><!-- /.service-two__text -->
                                            <h4 class="service-two__title"><a
                                                    href="https://caritwp.bracketweb.com/service-details/">Endowment
                                                    Funds</a></h4><!-- /.service-two__title -->
                                        </div><!-- /.service-two__card__content -->
                                    </div><!-- /.service-two__card -->
                                </div><!-- /.col-lg-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section><!-- /.service-two -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-5a9f780 e-con-full e-flex e-con e-parent" data-id="5a9f780"
            data-element_type="container">
            <div class="elementor-element elementor-element-a7fbc3d elementor-widget elementor-widget-carit-video"
                data-id="a7fbc3d" data-element_type="widget" data-widget_type="carit-video.default">
                <div class="elementor-widget-container">

                    <div class="video-two section-space">
                        <div class="video-two__bg"
                            style="background-image: url(https://caritwp.bracketweb.com/wp-content/uploads/2025/11/video-bg-2-1.jpg);">
                        </div><!-- /.video-two__image -->
                        <div class="container">
                            <div class="video-two__content">
                                <h3 class="video-two__title title bw-split-in-up">
                                    Help &amp; donate them when they’re in need </h3><!-- /.video-two__title -->
                                <div class="video-two__item__btn">
                                    <div class="video-two__item__btn__inner wb-hover-btn-wrapper">
                                        <a class="video-popup wb-hover-btn-item wb-btn-circle"
                                            href="https://www.youtube.com/watch?v=GTn2EKD-cfg">
                                            <span>Play</span>
                                        </a>
                                    </div>
                                </div><!-- /.video-two__item__btn -->
                            </div><!-- /.video-two__content -->
                        </div><!-- /.container -->
                    </div><!-- /.video-two -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-3d64b77 e-con-full e-flex e-con e-parent" data-id="3d64b77"
            data-element_type="container">
            <div class="elementor-element elementor-element-cd2fc37 elementor-widget elementor-widget-carit-audio"
                data-id="cd2fc37" data-element_type="widget" data-widget_type="carit-audio.default">
                <div class="elementor-widget-container">

                    <section class="audio-one ">
                        <div class="container">
                            <div class="audio-one__inner">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="audio-one__thumb">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/music-1-1.jpg"
                                                alt="music-1-1" title="music-1-1">
                                        </div><!-- /.audio-one__thumb -->
                                    </div><!-- /.col-xl-4 -->
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="audio-one__carousel-content">
                                            <div class="audio-one__carousel carit-owl__carousel owl-carousel"
                                                data-owl-options='{&quot;loop&quot;:false,&quot;margin&quot;:0,&quot;items&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:true,&quot;smartSpeed&quot;:700,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;animateOut&quot;:&quot;&quot;,&quot;animateIn&quot;:&quot;&quot;,&quot;autoplayHoverPause&quot;:true}'>
                                                <div class="item">
                                                    <div class="audio-one__item">
                                                        <div class="audio-one__item__content">
                                                            <div class="player-container wavesurfer-audio">
                                                                <div class="player-container__controls">
                                                                    <div class="controls play-btn">
                                                                        <i class="fas fa-play playPause"></i>
                                                                    </div>
                                                                </div><!-- /.player-container__left -->

                                                                <div class="player-container__inner">
                                                                    <div class="time current-time">00:00</div>
                                                                    <!-- Left Side Timer -->
                                                                    <div class="waveform__control">
                                                                        <audio class="audioFile">
                                                                            <source
                                                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donations.mp3"
                                                                                type="audio/mpeg">
                                                                        </audio>

                                                                        <div class="waveform" id="waveform-0"
                                                                            data-wavesurfer-options='{
													"container": "#waveform-0",
													"waveColor": "#FFE400",
													"progressColor": "#000000",
													"cursorColor": "#000000",
													"barWidth": 3,
													"barGap": 1,
													"height": 40
												}'>
                                                                        </div>
                                                                    </div><!-- /.waveform__control -->
                                                                    <div class="time duration">00:00</div>
                                                                    <!-- Right Side Timer -->
                                                                </div><!-- /.player-container__inner -->

                                                                <div class="player-container__controls">
                                                                    <div class="controls">
                                                                        <i class="mute fas fa-volume-up"></i>
                                                                    </div>
                                                                    <div class="volumeWrapper">
                                                                        <div class="volumeBar">
                                                                            <div class="volumeThumb"></div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.player-container__left -->

                                                            </div>

                                                            <h3 class="audio-one__item__title">we believe in
                                                                the transformative power of community.</h3>
                                                            <!-- /.audio-one__item__title -->
                                                            <div class="audio-one__item__bottom">
                                                                <div class="audio-one__item__auth">
                                                                    <div class="audio-one__item__auth__image">
                                                                        <img decoding="async"
                                                                            src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/music-auth-1-1.jpg"
                                                                            alt="music-auth-1-1" title="music-auth-1-1">
                                                                    </div>
                                                                    <!-- /.audio-one__item__auth__image -->
                                                                    <div class="audio-one__item__auth__content">
                                                                        <h4 class="audio-one__item__auth__name">
                                                                            Church radio station</h4>
                                                                        <!-- /.audio-one__item__auth__name -->
                                                                        <p class="audio-one__item__auth__dec">
                                                                            Total audio 250+</p>
                                                                        <!-- /.audio-one__item__auth__dec -->
                                                                    </div>
                                                                    <!-- /.audio-one__item__auth__content -->
                                                                </div><!-- /.audio-one__item__auth -->
                                                                <div class="audio-one__item__star">
                                                                    <i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i>
                                                                </div><!-- /.audio-one__item__star -->
                                                            </div><!-- /.audio-one__item__bottom -->
                                                        </div><!-- /.audio-one__content -->
                                                    </div><!-- /.audio-one__item -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="audio-one__item">
                                                        <div class="audio-one__item__content">
                                                            <div class="player-container wavesurfer-audio">
                                                                <div class="player-container__controls">
                                                                    <div class="controls play-btn">
                                                                        <i class="fas fa-play playPause"></i>
                                                                    </div>
                                                                </div><!-- /.player-container__left -->

                                                                <div class="player-container__inner">
                                                                    <div class="time current-time">00:00</div>
                                                                    <!-- Left Side Timer -->
                                                                    <div class="waveform__control">
                                                                        <audio class="audioFile">
                                                                            <source
                                                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donations.mp3"
                                                                                type="audio/mpeg">
                                                                        </audio>

                                                                        <div class="waveform" id="waveform-1"
                                                                            data-wavesurfer-options='{
													"container": "#waveform-1",
													"waveColor": "#FFE400",
													"progressColor": "#000000",
													"cursorColor": "#000000",
													"barWidth": 3,
													"barGap": 1,
													"height": 40
												}'>
                                                                        </div>
                                                                    </div><!-- /.waveform__control -->
                                                                    <div class="time duration">00:00</div>
                                                                    <!-- Right Side Timer -->
                                                                </div><!-- /.player-container__inner -->

                                                                <div class="player-container__controls">
                                                                    <div class="controls">
                                                                        <i class="mute fas fa-volume-up"></i>
                                                                    </div>
                                                                    <div class="volumeWrapper">
                                                                        <div class="volumeBar">
                                                                            <div class="volumeThumb"></div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.player-container__left -->

                                                            </div>

                                                            <h3 class="audio-one__item__title">we believe in
                                                                the transformative power of community.</h3>
                                                            <!-- /.audio-one__item__title -->
                                                            <div class="audio-one__item__bottom">
                                                                <div class="audio-one__item__auth">
                                                                    <div class="audio-one__item__auth__image">
                                                                        <img decoding="async"
                                                                            src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/music-auth-1-1.jpg"
                                                                            alt="music-auth-1-1" title="music-auth-1-1">
                                                                    </div>
                                                                    <!-- /.audio-one__item__auth__image -->
                                                                    <div class="audio-one__item__auth__content">
                                                                        <h4 class="audio-one__item__auth__name">
                                                                            Church radio station</h4>
                                                                        <!-- /.audio-one__item__auth__name -->
                                                                        <p class="audio-one__item__auth__dec">
                                                                            Total audio 250+</p>
                                                                        <!-- /.audio-one__item__auth__dec -->
                                                                    </div>
                                                                    <!-- /.audio-one__item__auth__content -->
                                                                </div><!-- /.audio-one__item__auth -->
                                                                <div class="audio-one__item__star">
                                                                    <i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i>
                                                                </div><!-- /.audio-one__item__star -->
                                                            </div><!-- /.audio-one__item__bottom -->
                                                        </div><!-- /.audio-one__content -->
                                                    </div><!-- /.audio-one__item -->
                                                </div><!-- /.item -->
                                                <div class="item">
                                                    <div class="audio-one__item">
                                                        <div class="audio-one__item__content">
                                                            <div class="player-container wavesurfer-audio">
                                                                <div class="player-container__controls">
                                                                    <div class="controls play-btn">
                                                                        <i class="fas fa-play playPause"></i>
                                                                    </div>
                                                                </div><!-- /.player-container__left -->

                                                                <div class="player-container__inner">
                                                                    <div class="time current-time">00:00</div>
                                                                    <!-- Left Side Timer -->
                                                                    <div class="waveform__control">
                                                                        <audio class="audioFile">
                                                                            <source
                                                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donations.mp3"
                                                                                type="audio/mpeg">
                                                                        </audio>

                                                                        <div class="waveform" id="waveform-2"
                                                                            data-wavesurfer-options='{
													"container": "#waveform-2",
													"waveColor": "#FFE400",
													"progressColor": "#000000",
													"cursorColor": "#000000",
													"barWidth": 3,
													"barGap": 1,
													"height": 40
												}'>
                                                                        </div>
                                                                    </div><!-- /.waveform__control -->
                                                                    <div class="time duration">00:00</div>
                                                                    <!-- Right Side Timer -->
                                                                </div><!-- /.player-container__inner -->

                                                                <div class="player-container__controls">
                                                                    <div class="controls">
                                                                        <i class="mute fas fa-volume-up"></i>
                                                                    </div>
                                                                    <div class="volumeWrapper">
                                                                        <div class="volumeBar">
                                                                            <div class="volumeThumb"></div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.player-container__left -->

                                                            </div>

                                                            <h3 class="audio-one__item__title">we believe in
                                                                the transformative power of community.</h3>
                                                            <!-- /.audio-one__item__title -->
                                                            <div class="audio-one__item__bottom">
                                                                <div class="audio-one__item__auth">
                                                                    <div class="audio-one__item__auth__image">
                                                                        <img decoding="async"
                                                                            src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/music-auth-1-1.jpg"
                                                                            alt="music-auth-1-1" title="music-auth-1-1">
                                                                    </div>
                                                                    <!-- /.audio-one__item__auth__image -->
                                                                    <div class="audio-one__item__auth__content">
                                                                        <h4 class="audio-one__item__auth__name">
                                                                            Church radio station</h4>
                                                                        <!-- /.audio-one__item__auth__name -->
                                                                        <p class="audio-one__item__auth__dec">
                                                                            Total audio 250+</p>
                                                                        <!-- /.audio-one__item__auth__dec -->
                                                                    </div>
                                                                    <!-- /.audio-one__item__auth__content -->
                                                                </div><!-- /.audio-one__item__auth -->
                                                                <div class="audio-one__item__star">
                                                                    <i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i>
                                                                </div><!-- /.audio-one__item__star -->
                                                            </div><!-- /.audio-one__item__bottom -->
                                                        </div><!-- /.audio-one__content -->
                                                    </div><!-- /.audio-one__item -->
                                                </div><!-- /.item -->
                                            </div>
                                        </div><!-- /.audio-one__carousel-item -->
                                    </div><!-- /.col-xl-8 -->
                                </div><!-- /.row -->
                            </div><!-- /.audio-one__inner -->
                        </div><!-- /.container -->
                    </section><!-- /.audio-one -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-160e164 e-con-full e-flex e-con e-parent" data-id="160e164"
            data-element_type="container">
            <div class="elementor-element elementor-element-faf415d elementor-widget elementor-widget-carit-donation"
                data-id="faf415d" data-element_type="widget" data-widget_type="carit-donation.default">
                <div class="elementor-widget-container">

                    <div class="donations-one section-space-top">
                        <div class="container">
                            <div class="donations-one__top">
                                <div class="text-center sec-title">
                                    <h6 class="sec-title__tagline justify-content-center bw-split-in-up-fast">
                                        <i aria-hidden="true" class="icon-love-safe"></i>
                                        Our Donation
                                    </h6>
                                    <h3 class="sec-title__title bw-split-in-up">
                                        Our Donation Now </h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                                <p class="donations-one__top__text bw-text bw-split-in-down">Maecenas ornare
                                    iaculis ultricies. Maecenas eget tristique orci. Praesent imperdiet purus et
                                    sodales volutpat. Proin ultrices, massa eu pulvinar pulvinar.</p>
                                <!-- /.donations-one__top__text -->
                            </div><!-- /.donations-one__top -->

                            <div class="donations-one__carousel carit-owl__carousel owl-carousel owl-theme"
                                data-owl-options='{&quot;loop&quot;:true,&quot;margin&quot;:30,&quot;items&quot;:3,&quot;nav&quot;:false,&quot;dots&quot;:true,&quot;smartSpeed&quot;:700,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;animateOut&quot;:&quot;&quot;,&quot;animateIn&quot;:&quot;&quot;,&quot;autoplayHoverPause&quot;:true,&quot;responsive&quot;:{&quot;992&quot;:{&quot;margin&quot;:24,&quot;stagePadding&quot;:0,&quot;items&quot;:3},&quot;767&quot;:{&quot;margin&quot;:24,&quot;stagePadding&quot;:0,&quot;items&quot;:2},&quot;576&quot;:{&quot;margin&quot;:24,&quot;stagePadding&quot;:0,&quot;items&quot;:1},&quot;0&quot;:{&quot;margin&quot;:10,&quot;stagePadding&quot;:0,&quot;items&quot;:1}}}'>
                                <div class="item">
                                    <div class="donation-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="donation-card__thumb">
                                            <img fetchpriority="high" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donation-01-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-01/"
                                                class="event-card__thumb__link"><i class="icon-hover"></i></a>
                                        </div><!-- /.donation-card__thumb -->
                                        <div class="donation-card__content">
                                            <div class="donation-card__count-bar count-box">
                                                <h3 class="donation-card__funfact">
                                                    <span class="count-text" data-stop="35" data-speed="1500"></span>
                                                    <span>%</span>
                                                </h3>
                                                <div class="circle-progress"
                                                    data-options='{
                                        "value": 0.35,
                                        "size": 60,
                                        "emptyFill": "rgba(0, 0, 0, 0)",
                                        "reverse": true,
                                        "fill": {
                                            "color": "#FFE400"
                                        }
                                    }'>
                                                </div><!-- /.circle-progress -->
                                            </div><!-- /.donation-card__count-bar -->
                                            <h4 class="donation-card__title"><a
                                                    href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-01/">Delivering
                                                    Clean Water</a></h4><!-- /.donation-card__title -->
                                            <div class="progress-box">
                                                <div class="progress-box__bar">
                                                    <div class="progress-box__bar__inner count-bar" data-percent="35%">
                                                    </div>
                                                    <!-- /.progress-box__bar__inner -->
                                                </div><!-- /.progress-box_bar -->
                                                <div class="progress-box__content">
                                                    <p class="progress-box__text">Donated
                                                        :<span>&#036;3,850.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                    <p class="progress-box__text">Goal
                                                        :<span>&#036;11,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                </div><!-- /.progress-box__content -->
                                            </div><!-- /.progress-box -->
                                            <div class="donation-card__btn">
                                                <a href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-01/"
                                                    class="carit-btn carit-btn--border"><span></span> Donate
                                                    now</a>
                                            </div><!-- /.donation-card__btn -->
                                        </div><!-- /.donation-card__content -->
                                    </div><!-- /.donation-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="donation-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="donation-card__thumb">
                                            <img decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donation-07-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/donations/ensuring-access-to-healthcare-02/"
                                                class="event-card__thumb__link"><i class="icon-hover"></i></a>
                                        </div><!-- /.donation-card__thumb -->
                                        <div class="donation-card__content">
                                            <div class="donation-card__count-bar count-box">
                                                <h3 class="donation-card__funfact">
                                                    <span class="count-text" data-stop="47" data-speed="1500"></span>
                                                    <span>%</span>
                                                </h3>
                                                <div class="circle-progress"
                                                    data-options='{
                                        "value": 0.47,
                                        "size": 60,
                                        "emptyFill": "rgba(0, 0, 0, 0)",
                                        "reverse": true,
                                        "fill": {
                                            "color": "#FFE400"
                                        }
                                    }'>
                                                </div><!-- /.circle-progress -->
                                            </div><!-- /.donation-card__count-bar -->
                                            <h4 class="donation-card__title"><a
                                                    href="https://caritwp.bracketweb.com/donations/ensuring-access-to-healthcare-02/">Ensuring
                                                    Access to Healthcare</a></h4><!-- /.donation-card__title -->
                                            <div class="progress-box">
                                                <div class="progress-box__bar">
                                                    <div class="progress-box__bar__inner count-bar" data-percent="47%">
                                                    </div>
                                                    <!-- /.progress-box__bar__inner -->
                                                </div><!-- /.progress-box_bar -->
                                                <div class="progress-box__content">
                                                    <p class="progress-box__text">Donated
                                                        :<span>&#036;4,230.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                    <p class="progress-box__text">Goal
                                                        :<span>&#036;9,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                </div><!-- /.progress-box__content -->
                                            </div><!-- /.progress-box -->
                                            <div class="donation-card__btn">
                                                <a href="https://caritwp.bracketweb.com/donations/ensuring-access-to-healthcare-02/"
                                                    class="carit-btn carit-btn--border"><span></span> Donate
                                                    now</a>
                                            </div><!-- /.donation-card__btn -->
                                        </div><!-- /.donation-card__content -->
                                    </div><!-- /.donation-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="donation-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="donation-card__thumb">
                                            <img decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donation-02-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-03/"
                                                class="event-card__thumb__link"><i class="icon-hover"></i></a>
                                        </div><!-- /.donation-card__thumb -->
                                        <div class="donation-card__content">
                                            <div class="donation-card__count-bar count-box">
                                                <h3 class="donation-card__funfact">
                                                    <span class="count-text" data-stop="70" data-speed="1500"></span>
                                                    <span>%</span>
                                                </h3>
                                                <div class="circle-progress"
                                                    data-options='{
                                        "value": 0.70,
                                        "size": 60,
                                        "emptyFill": "rgba(0, 0, 0, 0)",
                                        "reverse": true,
                                        "fill": {
                                            "color": "#FFE400"
                                        }
                                    }'>
                                                </div><!-- /.circle-progress -->
                                            </div><!-- /.donation-card__count-bar -->
                                            <h4 class="donation-card__title"><a
                                                    href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-03/">upport
                                                    for Vulnerable Populations</a></h4>
                                            <!-- /.donation-card__title -->
                                            <div class="progress-box">
                                                <div class="progress-box__bar">
                                                    <div class="progress-box__bar__inner count-bar" data-percent="70%">
                                                    </div>
                                                    <!-- /.progress-box__bar__inner -->
                                                </div><!-- /.progress-box_bar -->
                                                <div class="progress-box__content">
                                                    <p class="progress-box__text">Donated
                                                        :<span>&#036;7,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                    <p class="progress-box__text">Goal
                                                        :<span>&#036;10,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                </div><!-- /.progress-box__content -->
                                            </div><!-- /.progress-box -->
                                            <div class="donation-card__btn">
                                                <a href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-03/"
                                                    class="carit-btn carit-btn--border"><span></span> Donate
                                                    now</a>
                                            </div><!-- /.donation-card__btn -->
                                        </div><!-- /.donation-card__content -->
                                    </div><!-- /.donation-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="donation-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="donation-card__thumb">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donation-03-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-04/"
                                                class="event-card__thumb__link"><i class="icon-hover"></i></a>
                                        </div><!-- /.donation-card__thumb -->
                                        <div class="donation-card__content">
                                            <div class="donation-card__count-bar count-box">
                                                <h3 class="donation-card__funfact">
                                                    <span class="count-text" data-stop="60" data-speed="1500"></span>
                                                    <span>%</span>
                                                </h3>
                                                <div class="circle-progress"
                                                    data-options='{
                                        "value": 0.60,
                                        "size": 60,
                                        "emptyFill": "rgba(0, 0, 0, 0)",
                                        "reverse": true,
                                        "fill": {
                                            "color": "#FFE400"
                                        }
                                    }'>
                                                </div><!-- /.circle-progress -->
                                            </div><!-- /.donation-card__count-bar -->
                                            <h4 class="donation-card__title"><a
                                                    href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-04/">Ensuring
                                                    Access to Healthcare</a></h4><!-- /.donation-card__title -->
                                            <div class="progress-box">
                                                <div class="progress-box__bar">
                                                    <div class="progress-box__bar__inner count-bar" data-percent="60%">
                                                    </div>
                                                    <!-- /.progress-box__bar__inner -->
                                                </div><!-- /.progress-box_bar -->
                                                <div class="progress-box__content">
                                                    <p class="progress-box__text">Donated
                                                        :<span>&#036;6,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                    <p class="progress-box__text">Goal
                                                        :<span>&#036;10,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                </div><!-- /.progress-box__content -->
                                            </div><!-- /.progress-box -->
                                            <div class="donation-card__btn">
                                                <a href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-04/"
                                                    class="carit-btn carit-btn--border"><span></span> Donate
                                                    now</a>
                                            </div><!-- /.donation-card__btn -->
                                        </div><!-- /.donation-card__content -->
                                    </div><!-- /.donation-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="donation-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="donation-card__thumb">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donation-04-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-05/"
                                                class="event-card__thumb__link"><i class="icon-hover"></i></a>
                                        </div><!-- /.donation-card__thumb -->
                                        <div class="donation-card__content">
                                            <div class="donation-card__count-bar count-box">
                                                <h3 class="donation-card__funfact">
                                                    <span class="count-text" data-stop="80" data-speed="1500"></span>
                                                    <span>%</span>
                                                </h3>
                                                <div class="circle-progress"
                                                    data-options='{
                                        "value": 0.80,
                                        "size": 60,
                                        "emptyFill": "rgba(0, 0, 0, 0)",
                                        "reverse": true,
                                        "fill": {
                                            "color": "#FFE400"
                                        }
                                    }'>
                                                </div><!-- /.circle-progress -->
                                            </div><!-- /.donation-card__count-bar -->
                                            <h4 class="donation-card__title"><a
                                                    href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-05/">Ensuring
                                                    Access to Healthcare</a></h4><!-- /.donation-card__title -->
                                            <div class="progress-box">
                                                <div class="progress-box__bar">
                                                    <div class="progress-box__bar__inner count-bar" data-percent="80%">
                                                    </div>
                                                    <!-- /.progress-box__bar__inner -->
                                                </div><!-- /.progress-box_bar -->
                                                <div class="progress-box__content">
                                                    <p class="progress-box__text">Donated
                                                        :<span>&#036;8,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                    <p class="progress-box__text">Goal
                                                        :<span>&#036;10,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                </div><!-- /.progress-box__content -->
                                            </div><!-- /.progress-box -->
                                            <div class="donation-card__btn">
                                                <a href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-05/"
                                                    class="carit-btn carit-btn--border"><span></span> Donate
                                                    now</a>
                                            </div><!-- /.donation-card__btn -->
                                        </div><!-- /.donation-card__content -->
                                    </div><!-- /.donation-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="donation-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="donation-card__thumb">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/donation-05-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-06/"
                                                class="event-card__thumb__link"><i class="icon-hover"></i></a>
                                        </div><!-- /.donation-card__thumb -->
                                        <div class="donation-card__content">
                                            <div class="donation-card__count-bar count-box">
                                                <h3 class="donation-card__funfact">
                                                    <span class="count-text" data-stop="50" data-speed="1500"></span>
                                                    <span>%</span>
                                                </h3>
                                                <div class="circle-progress"
                                                    data-options='{
                                        "value": 0.50,
                                        "size": 60,
                                        "emptyFill": "rgba(0, 0, 0, 0)",
                                        "reverse": true,
                                        "fill": {
                                            "color": "#FFE400"
                                        }
                                    }'>
                                                </div><!-- /.circle-progress -->
                                            </div><!-- /.donation-card__count-bar -->
                                            <h4 class="donation-card__title"><a
                                                    href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-06/">upport
                                                    for Vulnerable Populations</a></h4>
                                            <!-- /.donation-card__title -->
                                            <div class="progress-box">
                                                <div class="progress-box__bar">
                                                    <div class="progress-box__bar__inner count-bar" data-percent="50%">
                                                    </div>
                                                    <!-- /.progress-box__bar__inner -->
                                                </div><!-- /.progress-box_bar -->
                                                <div class="progress-box__content">
                                                    <p class="progress-box__text">Donated
                                                        :<span>&#036;5,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                    <p class="progress-box__text">Goal
                                                        :<span>&#036;10,000.00</span></p>
                                                    <!-- /.progress-box__text -->
                                                </div><!-- /.progress-box__content -->
                                            </div><!-- /.progress-box -->
                                            <div class="donation-card__btn">
                                                <a href="https://caritwp.bracketweb.com/donations/upport-for-vulnerable-populations-06/"
                                                    class="carit-btn carit-btn--border"><span></span> Donate
                                                    now</a>
                                            </div><!-- /.donation-card__btn -->
                                        </div><!-- /.donation-card__content -->
                                    </div><!-- /.donation-card -->
                                </div><!-- /.item -->
                            </div><!-- /.donations-one__carousel -->
                        </div><!-- /.container -->
                    </div><!-- /.donations-one -->



                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-3a14b71 e-con-full e-flex e-con e-parent" data-id="3a14b71"
            data-element_type="container">
            <div class="elementor-element elementor-element-3972464 elementor-widget elementor-widget-carit-events"
                data-id="3972464" data-element_type="widget" data-widget_type="carit-events.default">
                <div class="elementor-widget-container">

                    <div class="events-one section-space">
                        <div class="container">
                            <div class="text-center sec-title">
                                <h6 class="sec-title__tagline justify-content-center bw-split-in-up-fast">
                                    <i aria-hidden="true" class="icon-love-safe"></i>
                                    Our Events
                                </h6>
                                <h3 class="sec-title__title bw-split-in-up">
                                    Our Events </h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="events-one__top__text bw-text bw-split-in-down">Maecenas ornare iaculis
                                ultricies. Maecenas eget tristique orci. Praesent imperdiet purus et sodales
                                volutpat. Proin ultrices, massa eu pulvinar pulvinar.</p>
                            <!-- /.events-one__top__text -->
                            <div class="row gutter-y-24 gutter-x-24">
                                <div class="col-lg-6">
                                    <div class="event-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="event-card__thumb">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/event-1-1.jpg"
                                                alt="event-1-1" title="event-1-1"> <a
                                                href="https://caritwp.bracketweb.com/event-details/"
                                                class="event-card__thumb__link"><i aria-hidden="true"
                                                    class="icon-hover"></i> </a>
                                            <div class="event-card__date">22 /<span>Dec</span></div>
                                            <!-- /.event-card__date -->
                                        </div><!-- /.event-card__thumb -->
                                        <div class="event-card__content">
                                            <h3 class="event-card__title"><a
                                                    href="https://caritwp.bracketweb.com/event-details/">an
                                                    Audience a Business Conference.</a></h3>
                                            <!-- /.event-card__title -->
                                            <ul class="ml-0 list-unstyled event-card__meta">
                                                <li><i class="icon-user"></i><a
                                                        href="https://caritwp.bracketweb.com/event-details/">by
                                                        Noile Mohsin</a></li>
                                                <li><i class="icon-clock-five"></i><span>02.00 PM</span></li>
                                            </ul><!-- /.list-unstyled event-card__meta -->
                                            <div class="event-card__btn">
                                                <a href="https://caritwp.bracketweb.com/event-details/"
                                                    class="carit-btn carit-btn--border"><span></span>Read
                                                    More</a>
                                            </div><!-- /.event-card__btn -->
                                        </div><!-- /.event-card__content -->
                                    </div><!-- /.event-card -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="event-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="event-card__thumb">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/event-1-2.jpg"
                                                alt="event-1-2" title="event-1-2"> <a
                                                href="https://caritwp.bracketweb.com/event-details/"
                                                class="event-card__thumb__link"><i aria-hidden="true"
                                                    class="icon-hover"></i> </a>
                                            <div class="event-card__date">22 /<span>Dec</span></div>
                                            <!-- /.event-card__date -->
                                        </div><!-- /.event-card__thumb -->
                                        <div class="event-card__content">
                                            <h3 class="event-card__title"><a
                                                    href="https://caritwp.bracketweb.com/event-details/">Thomas
                                                    Church Vector Art Conference 3+</a></h3>
                                            <!-- /.event-card__title -->
                                            <ul class="ml-0 list-unstyled event-card__meta">
                                                <li><i class="icon-user"></i><a
                                                        href="https://caritwp.bracketweb.com/event-details/">by
                                                        Noile Mohsin</a></li>
                                                <li><i class="icon-clock-five"></i><span>02.00 PM</span></li>
                                            </ul><!-- /.list-unstyled event-card__meta -->
                                            <div class="event-card__btn">
                                                <a href="https://caritwp.bracketweb.com/event-details/"
                                                    class="carit-btn carit-btn--border"><span></span>Read
                                                    More</a>
                                            </div><!-- /.event-card__btn -->
                                        </div><!-- /.event-card__content -->
                                    </div><!-- /.event-card -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.events-one -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-f926cb5 e-con-full e-flex e-con e-parent" data-id="f926cb5"
            data-element_type="container">
            <div class="elementor-element elementor-element-e572fa0 elementor-widget elementor-widget-carit-team"
                data-id="e572fa0" data-element_type="widget" data-widget_type="carit-team.default">
                <div class="elementor-widget-container">

                    <section class="team-two section-space" id="team">
                        <div class="container">
                            <div class="team-two__top">
                                <div class="row align-items-end gutter-y-24">
                                    <div class="col-lg-5">
                                        <div class="sec-title text-start">
                                            <h6 class="sec-title__tagline justify-content-start bw-split-in-up-fast">
                                                <i aria-hidden="true" class="icon-love-safe"></i>
                                                Our Team
                                            </h6>
                                            <h3 class="sec-title__title bw-split-in-up">
                                                Team Member </h3><!-- /.sec-title__title -->
                                        </div><!-- /.sec-title -->
                                    </div><!-- /.col-lg-5 -->
                                    <div class="col-lg-7">
                                        <div class="team-two__right">
                                            <p class="team-two__text">Maecenas ornare iaculis ultricies.
                                                Maecenas eget tristique orci. Praesent imperdiet.</p>
                                            <!-- /.team-two__text -->
                                            <div class="team-two__custome-navs"></div>
                                            <!-- /.team-two__custome-navs -->
                                        </div><!-- /.team-two__right -->
                                    </div><!-- /.col-lg-5 -->
                                </div><!-- /.row -->
                            </div><!-- /.team-two__top -->
                        </div><!-- /.container -->
                        <div class="container-fluid">
                            <div class="team-two__carousel carit-owl__carousel owl-carousel owl-theme"
                                data-owl-options='{
					"items": 1,
					"margin": 24,
					"loop": true,
					"smartSpeed": 700,
					"navContainer": ".team-two__custome-navs",
					"nav": true,
					"dots": false,
					"navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
					"autoplay": false,
					"responsive": {
						"0": {
							"items": 1
						},
						"768": {
							"items": 2,
							"margin": 24
						},
						"992": {
							"items": 3,
							"margin": 24
						},
						"1200": {
							"items": 4,
							"margin": 24
						},
						"1400": {
							"items": 5,
							"margin": 24
						}
					}
				}'>
                                <div class="item">
                                    <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="team-card-two__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/team-2-1.jpg"
                                                alt="team-2-1" title="team-2-1"> <a
                                                href="https://caritwp.bracketweb.com/team-details/"
                                                class="team-card-two__image__link"><i aria-hidden="true"
                                                    class="icon-hover"></i> </a>
                                            <div class="team-card-two__social">
                                                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a
                                                    href="https://twitter.com"><i class="fab fa-twitter"></i></a> <a
                                                    href="https://instagram.com"><i class="fab fa-instagram"></i></a> <a
                                                    href="https://www.pinterest.com/"><i
                                                        class="fab fa-pinterest-p"></i></a>
                                            </div><!-- /.team-card-two__social -->
                                        </div><!-- /.team-card-two__image -->
                                        <div class="team-card-two__content">
                                            <h3 class="team-card-two__title">
                                                <a href="https://caritwp.bracketweb.com/team-details/">Oliver
                                                    Charlotte</a>
                                            </h3><!-- /.team-card-two__title -->
                                            <p class="team-card-two__designation">Pastor</p>
                                            <!-- /.team-card-two__designation -->
                                        </div><!-- /.team-card-two__content -->
                                    </div><!-- /.team-card-two -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="team-card-two__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/team-2-2.jpg"
                                                alt="team-2-2" title="team-2-2"> <a
                                                href="https://caritwp.bracketweb.com/team-details/"
                                                class="team-card-two__image__link"><i aria-hidden="true"
                                                    class="icon-hover"></i> </a>
                                            <div class="team-card-two__social">
                                                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a
                                                    href="https://twitter.com"><i class="fab fa-twitter"></i></a> <a
                                                    href="https://instagram.com"><i class="fab fa-instagram"></i></a> <a
                                                    href="https://www.pinterest.com/"><i
                                                        class="fab fa-pinterest-p"></i></a>
                                            </div><!-- /.team-card-two__social -->
                                        </div><!-- /.team-card-two__image -->
                                        <div class="team-card-two__content">
                                            <h3 class="team-card-two__title">
                                                <a href="https://caritwp.bracketweb.com/team-details/">Theodore
                                                    Luna</a>
                                            </h3><!-- /.team-card-two__title -->
                                            <p class="team-card-two__designation">Priest</p>
                                            <!-- /.team-card-two__designation -->
                                        </div><!-- /.team-card-two__content -->
                                    </div><!-- /.team-card-two -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="team-card-two__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/team-2-3.jpg"
                                                alt="team-2-3" title="team-2-3"> <a
                                                href="https://caritwp.bracketweb.com/team-details/"
                                                class="team-card-two__image__link"><i aria-hidden="true"
                                                    class="icon-hover"></i> </a>
                                            <div class="team-card-two__social">
                                                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a
                                                    href="https://twitter.com"><i class="fab fa-twitter"></i></a> <a
                                                    href="https://instagram.com"><i class="fab fa-instagram"></i></a> <a
                                                    href="https://www.pinterest.com/"><i
                                                        class="fab fa-pinterest-p"></i></a>
                                            </div><!-- /.team-card-two__social -->
                                        </div><!-- /.team-card-two__image -->
                                        <div class="team-card-two__content">
                                            <h3 class="team-card-two__title">
                                                <a href="https://caritwp.bracketweb.com/team-details/">WilliamI
                                                    sabella</a>
                                            </h3><!-- /.team-card-two__title -->
                                            <p class="team-card-two__designation">Senior Pastor</p>
                                            <!-- /.team-card-two__designation -->
                                        </div><!-- /.team-card-two__content -->
                                    </div><!-- /.team-card-two -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="team-card-two__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/team-2-4.jpg"
                                                alt="team-2-4" title="team-2-4"> <a
                                                href="https://caritwp.bracketweb.com/team-details/"
                                                class="team-card-two__image__link"><i aria-hidden="true"
                                                    class="icon-hover"></i> </a>
                                            <div class="team-card-two__social">
                                                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a
                                                    href="https://twitter.com"><i class="fab fa-twitter"></i></a> <a
                                                    href="https://instagram.com"><i class="fab fa-instagram"></i></a> <a
                                                    href="https://www.pinterest.com/"><i
                                                        class="fab fa-pinterest-p"></i></a>
                                            </div><!-- /.team-card-two__social -->
                                        </div><!-- /.team-card-two__image -->
                                        <div class="team-card-two__content">
                                            <h3 class="team-card-two__title">
                                                <a href="https://caritwp.bracketweb.com/team-details/">Elijah
                                                    Sophia</a>
                                            </h3><!-- /.team-card-two__title -->
                                            <p class="team-card-two__designation">Preacher</p>
                                            <!-- /.team-card-two__designation -->
                                        </div><!-- /.team-card-two__content -->
                                    </div><!-- /.team-card-two -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="team-card-two__image">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/team-2-5.jpg"
                                                alt="team-2-5" title="team-2-5"> <a
                                                href="https://caritwp.bracketweb.com/team-details/"
                                                class="team-card-two__image__link"><i aria-hidden="true"
                                                    class="icon-hover"></i> </a>
                                            <div class="team-card-two__social">
                                                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a
                                                    href="https://twitter.com"><i class="fab fa-twitter"></i></a> <a
                                                    href="https://instagram.com"><i class="fab fa-instagram"></i></a> <a
                                                    href="https://www.pinterest.com/"><i
                                                        class="fab fa-pinterest-p"></i></a>
                                            </div><!-- /.team-card-two__social -->
                                        </div><!-- /.team-card-two__image -->
                                        <div class="team-card-two__content">
                                            <h3 class="team-card-two__title">
                                                <a href="https://caritwp.bracketweb.com/team-details/">James
                                                    Amelia</a>
                                            </h3><!-- /.team-card-two__title -->
                                            <p class="team-card-two__designation">Junior Pastor</p>
                                            <!-- /.team-card-two__designation -->
                                        </div><!-- /.team-card-two__content -->
                                    </div><!-- /.team-card-two -->
                                </div><!-- /.item -->
                            </div><!-- /.team-two__carousel -->
                        </div><!-- /.container-fluid -->
                    </section><!-- /.team-two -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-87e5085 e-con-full e-flex e-con e-parent" data-id="87e5085"
            data-element_type="container">
            <div class="elementor-element elementor-element-a30027c elementor-widget elementor-widget-carit-testimonials"
                data-id="a30027c" data-element_type="widget" data-widget_type="carit-testimonials.default">
                <div class="elementor-widget-container">

                    <section class="testimonials-one section-space-top" id="testimonial">
                        <div class="container">
                            <div class="testimonials-one__inner section-space-bottom">
                                <div class="testimonials-one__top">
                                    <div class="testimonials-one__round">
                                        <a href="https://caritwp.bracketweb.com/" class="testimonials-one__round__img">
                                            <img decoding="async"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/logo-shape-black.png"
                                                alt="logo-shape-black" title="logo-shape-black">
                                        </a><!-- /.testimonials-one__round__img -->
                                        <div class="circle-text__curved-circle">
                                            <div class="circle-text__curved-circle__item curved-circle--item"
                                                data-circle-text-options='{
							"radius": 75,
							"forceWidth": true,
							"forceHeight": true
						}'>
                                                <span class="lettering-item">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    WHAT CLIENT
                                                    SAYS?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            </div>
                                        </div><!-- /.circle-text__curved-circle -->
                                    </div><!-- /.testimonials-one__round -->
                                </div><!-- /.testimonials-one__top -->
                                <div class="testimonials-one__carousel carit-owl__carousel owl-carousel owl-theme"
                                    data-owl-options='{&quot;loop&quot;:true,&quot;margin&quot;:0,&quot;items&quot;:1,&quot;nav&quot;:true,&quot;dots&quot;:false,&quot;smartSpeed&quot;:700,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;animateOut&quot;:&quot;&quot;,&quot;animateIn&quot;:&quot;&quot;,&quot;autoplayHoverPause&quot;:true,&quot;navText&quot;:[&quot;&lt;span class=\&quot;  carit-icons-two-arrow-left1 \&quot;&gt;&lt;\/span&gt;&quot;,&quot;&lt;span class=\&quot;  carit-icons-two-arrow-left \&quot;&gt;&lt;\/span&gt;&quot;]}'>
                                    <div class="item">
                                        <div class="testimonials-one__item">
                                            <div class="testimonials-one__item__top">
                                                <h2 class="testimonials-one__title">Autography Evelyn</h2>
                                                <!-- /.testimonials-one__text -->
                                                <div class="testimonials-one__star">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i>
                                                </div><!-- /.testimonials-one__star -->
                                            </div><!-- /.testimonials-one__item__top -->
                                            <p class="testimonials-one__text">Morbi urna ligula, pharetra a
                                                euismod eu, venenatis ac orci. Vestibulum tempor leo aliquam
                                                odio interdum tincidunt. Nulla id pharetra nisl, eget rhoncus
                                                augue. Proin vel odio suscipit, egestas magna ut, porta est. In
                                                porta eros mauris</p><!-- /.testimonials-one__text -->
                                            <div class="testimonials-one__auth">
                                                <img decoding="async"
                                                    src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/testi-1-1.jpg"
                                                    alt="testi-1-1" title="testi-1-1">
                                                <div class="quite">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 300.000000 300.000000"
                                                        preserveAspectRatio="xMidYMid meet">
                                                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                                            fill="" stroke="none">
                                                            <path
                                                                d="M1127 1828 c-115 -123 -194 -392 -154 -529 53 -180 275 -240 406 -108 116 115 84 315 -61 390 -21 10 -44 19 -53 19 -12 0 -15 6 -9 23 9 30 43 97 65 128 l18 26 -74 51 c-41 29 -78 52 -82 52 -4 0 -29 -23 -56 -52z" />
                                                            <path
                                                                d="M1711 1825 c-99 -109 -154 -264 -155 -435 -1 -116 7 -141 66 -199 116 -116 313 -85 390 63 34 64 31 155 -7 224 -30 55 -89 105 -138 118 -15 3 -27 13 -27 20 0 17 34 87 61 126 11 14 19 28 19 31 0 7 -124 95 -143 103 -9 3 -34 -17 -66 -51z" />
                                                        </g>
                                                    </svg>
                                                </div><!-- /.quite -->
                                            </div><!-- /.testimonials-one__item__auth -->
                                            <div class="testimonials-one__fram">
                                                <div class="testimonials-one__fram__signeture">
                                                    <img decoding="async"
                                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/signeture.png"
                                                        alt="signeture" title="signeture">
                                                </div><!-- /.testimonials-one__fram__signneture -->
                                                <div class="testimonials-one__fram__tag"><span>UX/UI
                                                        Specialist</span></div>
                                                <!-- /.testimonials-one__fram__tag -->
                                            </div><!-- /.testimonials-one__fram -->
                                        </div><!-- /.testimonials-one__item -->
                                    </div><!-- /.item -->
                                    <div class="item">
                                        <div class="testimonials-one__item">
                                            <div class="testimonials-one__item__top">
                                                <h2 class="testimonials-one__title">Autography Evelyn</h2>
                                                <!-- /.testimonials-one__text -->
                                                <div class="testimonials-one__star">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i>
                                                </div><!-- /.testimonials-one__star -->
                                            </div><!-- /.testimonials-one__item__top -->
                                            <p class="testimonials-one__text">Morbi urna ligula, pharetra a
                                                euismod eu, venenatis ac orci. Vestibulum tempor leo aliquam
                                                odio interdum tincidunt. Nulla id pharetra nisl, eget rhoncus
                                                augue. Proin vel odio suscipit, egestas magna ut, porta est. In
                                                porta eros mauris</p><!-- /.testimonials-one__text -->
                                            <div class="testimonials-one__auth">
                                                <img decoding="async"
                                                    src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/testi-1-1.jpg"
                                                    alt="testi-1-1" title="testi-1-1">
                                                <div class="quite">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 300.000000 300.000000"
                                                        preserveAspectRatio="xMidYMid meet">
                                                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                                            fill="" stroke="none">
                                                            <path
                                                                d="M1127 1828 c-115 -123 -194 -392 -154 -529 53 -180 275 -240 406 -108 116 115 84 315 -61 390 -21 10 -44 19 -53 19 -12 0 -15 6 -9 23 9 30 43 97 65 128 l18 26 -74 51 c-41 29 -78 52 -82 52 -4 0 -29 -23 -56 -52z" />
                                                            <path
                                                                d="M1711 1825 c-99 -109 -154 -264 -155 -435 -1 -116 7 -141 66 -199 116 -116 313 -85 390 63 34 64 31 155 -7 224 -30 55 -89 105 -138 118 -15 3 -27 13 -27 20 0 17 34 87 61 126 11 14 19 28 19 31 0 7 -124 95 -143 103 -9 3 -34 -17 -66 -51z" />
                                                        </g>
                                                    </svg>
                                                </div><!-- /.quite -->
                                            </div><!-- /.testimonials-one__item__auth -->
                                            <div class="testimonials-one__fram">
                                                <div class="testimonials-one__fram__signeture">
                                                    <img decoding="async"
                                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/signeture.png"
                                                        alt="signeture" title="signeture">
                                                </div><!-- /.testimonials-one__fram__signneture -->
                                                <div class="testimonials-one__fram__tag"><span>UX/UI
                                                        Specialist</span></div>
                                                <!-- /.testimonials-one__fram__tag -->
                                            </div><!-- /.testimonials-one__fram -->
                                        </div><!-- /.testimonials-one__item -->
                                    </div><!-- /.item -->
                                    <div class="item">
                                        <div class="testimonials-one__item">
                                            <div class="testimonials-one__item__top">
                                                <h2 class="testimonials-one__title">Autography Evelyn</h2>
                                                <!-- /.testimonials-one__text -->
                                                <div class="testimonials-one__star">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i>
                                                </div><!-- /.testimonials-one__star -->
                                            </div><!-- /.testimonials-one__item__top -->
                                            <p class="testimonials-one__text">Morbi urna ligula, pharetra a
                                                euismod eu, venenatis ac orci. Vestibulum tempor leo aliquam
                                                odio interdum tincidunt. Nulla id pharetra nisl, eget rhoncus
                                                augue. Proin vel odio suscipit, egestas magna ut, porta est. In
                                                porta eros mauris</p><!-- /.testimonials-one__text -->
                                            <div class="testimonials-one__auth">
                                                <img decoding="async"
                                                    src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/testi-1-1.jpg"
                                                    alt="testi-1-1" title="testi-1-1">
                                                <div class="quite">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 300.000000 300.000000"
                                                        preserveAspectRatio="xMidYMid meet">
                                                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                                            fill="" stroke="none">
                                                            <path
                                                                d="M1127 1828 c-115 -123 -194 -392 -154 -529 53 -180 275 -240 406 -108 116 115 84 315 -61 390 -21 10 -44 19 -53 19 -12 0 -15 6 -9 23 9 30 43 97 65 128 l18 26 -74 51 c-41 29 -78 52 -82 52 -4 0 -29 -23 -56 -52z" />
                                                            <path
                                                                d="M1711 1825 c-99 -109 -154 -264 -155 -435 -1 -116 7 -141 66 -199 116 -116 313 -85 390 63 34 64 31 155 -7 224 -30 55 -89 105 -138 118 -15 3 -27 13 -27 20 0 17 34 87 61 126 11 14 19 28 19 31 0 7 -124 95 -143 103 -9 3 -34 -17 -66 -51z" />
                                                        </g>
                                                    </svg>
                                                </div><!-- /.quite -->
                                            </div><!-- /.testimonials-one__item__auth -->
                                            <div class="testimonials-one__fram">
                                                <div class="testimonials-one__fram__signeture">
                                                    <img decoding="async"
                                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/signeture.png"
                                                        alt="signeture" title="signeture">
                                                </div><!-- /.testimonials-one__fram__signneture -->
                                                <div class="testimonials-one__fram__tag"><span>UX/UI
                                                        Specialist</span></div>
                                                <!-- /.testimonials-one__fram__tag -->
                                            </div><!-- /.testimonials-one__fram -->
                                        </div><!-- /.testimonials-one__item -->
                                    </div><!-- /.item -->
                                </div><!-- /.testimonials-one__carousel -->
                                <div class="testimonials-one__line"></div><!-- /.testimonials-one__line -->
                            </div><!-- /.testimonials-one__inner -->
                        </div><!-- /.container -->
                    </section><!-- /.testimonials-one -->

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-c077199 e-con-full e-flex e-con e-parent" data-id="c077199"
            data-element_type="container">
            <div class="elementor-element elementor-element-91eb926 elementor-widget elementor-widget-carit-blog"
                data-id="91eb926" data-element_type="widget" data-widget_type="carit-blog.default">
                <div class="elementor-widget-container">

                    <section class="blog-one section-space-top" id="blog">
                        <div class="container">
                            <div class="blog-one__top">
                                <div class="row align-items-end gutter-y-24">
                                    <div class="col-lg-5">
                                        <div class="sec-title text-start">
                                            <h6 class="sec-title__tagline justify-content-start bw-split-in-up-fast">
                                                <i aria-hidden="true" class="icon-love-safe"></i>
                                                Our Blog
                                            </h6>
                                            <h3 class="sec-title__title bw-split-in-up">
                                                News &amp; blogs </h3><!-- /.sec-title__title -->
                                        </div><!-- /.sec-title -->
                                    </div><!-- /.col-lg-5 -->
                                    <div class="col-lg-7">
                                        <div class="blog-one__right">
                                            <p class="blog-one__text bw-text bw-split-in-down">Maecenas ornare
                                                iaculis ultricies. Maecenas eget tristique orci. Praesent
                                                imperdiet.</p><!-- /.blog-one__text -->
                                            <div class="blog-one__custome-navs"></div>
                                            <!-- /.blog-one__custome-navs -->
                                        </div><!-- /.blog-one__right -->
                                    </div><!-- /.col-lg-5 -->
                                </div><!-- /.row -->
                            </div><!-- /.blog-one__top -->
                            <div class="team-page__carousel carit-owl__carousel carit-owl__carousel--with-shadow owl-carousel owl-theme"
                                data-owl-options='{
					"items": 1,
					"margin": 24,
					"loop": false,
					"smartSpeed": 700,
					"navContainer": ".blog-one__custome-navs",
					"nav": true,
					"dots": false,
					"navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
					"autoplay": false,
					"responsive": {
						"0": {
							"items": 1
						},
						"576": {
							"items": 1,
							"margin": 24
						},
						"767": {
							"items": 2,
							"margin": 24
						},
						"992": {
							"items": 3,
							"margin": 24
						},
						"1200": {
							"items": 3,
							"margin": 24
						}
					}
				}'>
                                <div class="item">
                                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="blog-card__image">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/blog-01-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-10/"
                                                class="blog-card__image__link"></a>
                                            <div class="blog-card__date"><span>20 /</span>Nov</div>
                                            <!-- /.blog-card__date -->
                                        </div><!-- /.blog-card__image -->
                                        <div class="blog-card__content">
                                            <div class="blog-card__content__top">
                                                <h3 class="blog-card__title"><a
                                                        href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-10/">Church
                                                        lord solution to build Prayer pastor news</a></h3>
                                                <!-- /.blog-card__title -->
                                                <ul class="ml-0 list-unstyled blog-card__meta">
                                                    <li><i class="icon-user"></i> <span class="author vcard"><a
                                                                class="url fn n"
                                                                href="https://caritwp.bracketweb.com/author/yapighz4mr7k47gyqsamq14co/">CaritWP</a></span>
                                                    </li>
                                                    <li><i class="icon-chat"></i> <a
                                                            href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-10/#comments">2
                                                            Comments<span class="screen-reader-text"> on
                                                                Church lord solution to build Prayer pastor
                                                                news</span></a></li>
                                                </ul><!-- /.list-unstyled blog-card__meta -->
                                            </div><!-- /.blog-card__content__top -->
                                            <div class="blog-card__bottom">
                                                <a href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-10/"
                                                    class="carit-btn"><span></span> Read
                                                    More</a><!-- /.blog-card__link -->
                                            </div>
                                        </div><!-- /.blog-card__content -->
                                    </div><!-- /.blog-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="blog-card__image">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/blog-02-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-9/"
                                                class="blog-card__image__link"></a>
                                            <div class="blog-card__date"><span>20 /</span>Nov</div>
                                            <!-- /.blog-card__date -->
                                        </div><!-- /.blog-card__image -->
                                        <div class="blog-card__content">
                                            <div class="blog-card__content__top">
                                                <h3 class="blog-card__title"><a
                                                        href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-9/">Church
                                                        lord solution to build Prayer pastor news</a></h3>
                                                <!-- /.blog-card__title -->
                                                <ul class="ml-0 list-unstyled blog-card__meta">
                                                    <li><i class="icon-user"></i> <span class="author vcard"><a
                                                                class="url fn n"
                                                                href="https://caritwp.bracketweb.com/author/yapighz4mr7k47gyqsamq14co/">CaritWP</a></span>
                                                    </li>
                                                    <li><i class="icon-chat"></i> <a
                                                            href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-9/#comments">2
                                                            Comments<span class="screen-reader-text"> on
                                                                Church lord solution to build Prayer pastor
                                                                news</span></a></li>
                                                </ul><!-- /.list-unstyled blog-card__meta -->
                                            </div><!-- /.blog-card__content__top -->
                                            <div class="blog-card__bottom">
                                                <a href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-9/"
                                                    class="carit-btn"><span></span> Read
                                                    More</a><!-- /.blog-card__link -->
                                            </div>
                                        </div><!-- /.blog-card__content -->
                                    </div><!-- /.blog-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="blog-card__image">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/blog-03-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-8/"
                                                class="blog-card__image__link"></a>
                                            <div class="blog-card__date"><span>20 /</span>Nov</div>
                                            <!-- /.blog-card__date -->
                                        </div><!-- /.blog-card__image -->
                                        <div class="blog-card__content">
                                            <div class="blog-card__content__top">
                                                <h3 class="blog-card__title"><a
                                                        href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-8/">Church
                                                        lord solution to build Prayer pastor news</a></h3>
                                                <!-- /.blog-card__title -->
                                                <ul class="ml-0 list-unstyled blog-card__meta">
                                                    <li><i class="icon-user"></i> <span class="author vcard"><a
                                                                class="url fn n"
                                                                href="https://caritwp.bracketweb.com/author/yapighz4mr7k47gyqsamq14co/">CaritWP</a></span>
                                                    </li>
                                                    <li><i class="icon-chat"></i> <a
                                                            href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-8/#comments">2
                                                            Comments<span class="screen-reader-text"> on
                                                                Church lord solution to build Prayer pastor
                                                                news</span></a></li>
                                                </ul><!-- /.list-unstyled blog-card__meta -->
                                            </div><!-- /.blog-card__content__top -->
                                            <div class="blog-card__bottom">
                                                <a href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-8/"
                                                    class="carit-btn"><span></span> Read
                                                    More</a><!-- /.blog-card__link -->
                                            </div>
                                        </div><!-- /.blog-card__content -->
                                    </div><!-- /.blog-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="blog-card__image">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/blog-04-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-7/"
                                                class="blog-card__image__link"></a>
                                            <div class="blog-card__date"><span>20 /</span>Nov</div>
                                            <!-- /.blog-card__date -->
                                        </div><!-- /.blog-card__image -->
                                        <div class="blog-card__content">
                                            <div class="blog-card__content__top">
                                                <h3 class="blog-card__title"><a
                                                        href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-7/">Church
                                                        lord solution to build Prayer pastor news</a></h3>
                                                <!-- /.blog-card__title -->
                                                <ul class="ml-0 list-unstyled blog-card__meta">
                                                    <li><i class="icon-user"></i> <span class="author vcard"><a
                                                                class="url fn n"
                                                                href="https://caritwp.bracketweb.com/author/yapighz4mr7k47gyqsamq14co/">CaritWP</a></span>
                                                    </li>
                                                    <li><i class="icon-chat"></i> <a
                                                            href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-7/#comments">2
                                                            Comments<span class="screen-reader-text"> on
                                                                Church lord solution to build Prayer pastor
                                                                news</span></a></li>
                                                </ul><!-- /.list-unstyled blog-card__meta -->
                                            </div><!-- /.blog-card__content__top -->
                                            <div class="blog-card__bottom">
                                                <a href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-7/"
                                                    class="carit-btn"><span></span> Read
                                                    More</a><!-- /.blog-card__link -->
                                            </div>
                                        </div><!-- /.blog-card__content -->
                                    </div><!-- /.blog-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="blog-card__image">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/blog-05-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-6/"
                                                class="blog-card__image__link"></a>
                                            <div class="blog-card__date"><span>20 /</span>Nov</div>
                                            <!-- /.blog-card__date -->
                                        </div><!-- /.blog-card__image -->
                                        <div class="blog-card__content">
                                            <div class="blog-card__content__top">
                                                <h3 class="blog-card__title"><a
                                                        href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-6/">Church
                                                        lord solution to build Prayer pastor news</a></h3>
                                                <!-- /.blog-card__title -->
                                                <ul class="ml-0 list-unstyled blog-card__meta">
                                                    <li><i class="icon-user"></i> <span class="author vcard"><a
                                                                class="url fn n"
                                                                href="https://caritwp.bracketweb.com/author/yapighz4mr7k47gyqsamq14co/">CaritWP</a></span>
                                                    </li>
                                                    <li><i class="icon-chat"></i> <a
                                                            href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-6/#comments">2
                                                            Comments<span class="screen-reader-text"> on
                                                                Church lord solution to build Prayer pastor
                                                                news</span></a></li>
                                                </ul><!-- /.list-unstyled blog-card__meta -->
                                            </div><!-- /.blog-card__content__top -->
                                            <div class="blog-card__bottom">
                                                <a href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-6/"
                                                    class="carit-btn"><span></span> Read
                                                    More</a><!-- /.blog-card__link -->
                                            </div>
                                        </div><!-- /.blog-card__content -->
                                    </div><!-- /.blog-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="blog-card__image">
                                            <img loading="lazy" decoding="async" width="416" height="300"
                                                src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/blog-06-416x300.png"
                                                class="attachment-carit_blog_416X300 size-carit_blog_416X300 wp-post-image"
                                                alt="" /> <a
                                                href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-5/"
                                                class="blog-card__image__link"></a>
                                            <div class="blog-card__date"><span>20 /</span>Nov</div>
                                            <!-- /.blog-card__date -->
                                        </div><!-- /.blog-card__image -->
                                        <div class="blog-card__content">
                                            <div class="blog-card__content__top">
                                                <h3 class="blog-card__title"><a
                                                        href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-5/">Church
                                                        lord solution to build Prayer pastor news</a></h3>
                                                <!-- /.blog-card__title -->
                                                <ul class="ml-0 list-unstyled blog-card__meta">
                                                    <li><i class="icon-user"></i> <span class="author vcard"><a
                                                                class="url fn n"
                                                                href="https://caritwp.bracketweb.com/author/yapighz4mr7k47gyqsamq14co/">CaritWP</a></span>
                                                    </li>
                                                    <li><i class="icon-chat"></i> <a
                                                            href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-5/#comments">2
                                                            Comments<span class="screen-reader-text"> on
                                                                Church lord solution to build Prayer pastor
                                                                news</span></a></li>
                                                </ul><!-- /.list-unstyled blog-card__meta -->
                                            </div><!-- /.blog-card__content__top -->
                                            <div class="blog-card__bottom">
                                                <a href="https://caritwp.bracketweb.com/church-lord-solution-to-build-prayer-pastor-news-5/"
                                                    class="carit-btn"><span></span> Read
                                                    More</a><!-- /.blog-card__link -->
                                            </div>
                                        </div><!-- /.blog-card__content -->
                                    </div><!-- /.blog-card -->
                                </div><!-- /.item -->
                            </div><!-- /.team-page__carousel -->
                        </div><!-- /.container -->
                    </section><!-- /.blog-one -->
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-61a3a0c e-con-full e-flex e-con e-parent" data-id="61a3a0c"
            data-element_type="container">
            <div class="elementor-element elementor-element-4d5ad2e elementor-widget elementor-widget-carit-client"
                data-id="4d5ad2e" data-element_type="widget" data-widget_type="carit-client.default">
                <div class="elementor-widget-container">

                    <div class="client-carousel section-space wow fadeInUp" data-wow-duration='1500ms'
                        data-wow-delay='500ms'>
                        <div class="container">
                            <div class="client-carousel__one carit-owl__carousel owl-theme owl-carousel"
                                data-owl-options='{&quot;loop&quot;:true,&quot;margin&quot;:0,&quot;items&quot;:1,&quot;nav&quot;:false,&quot;dots&quot;:false,&quot;smartSpeed&quot;:700,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:5000,&quot;animateOut&quot;:&quot;&quot;,&quot;animateIn&quot;:&quot;&quot;,&quot;autoplayHoverPause&quot;:true,&quot;responsive&quot;:{&quot;1200&quot;:{&quot;margin&quot;:80,&quot;stagePadding&quot;:0,&quot;items&quot;:5},&quot;992&quot;:{&quot;margin&quot;:60,&quot;stagePadding&quot;:0,&quot;items&quot;:4},&quot;768&quot;:{&quot;margin&quot;:50,&quot;stagePadding&quot;:0,&quot;items&quot;:3},&quot;500&quot;:{&quot;margin&quot;:40,&quot;stagePadding&quot;:0,&quot;items&quot;:2},&quot;431&quot;:{&quot;margin&quot;:30,&quot;stagePadding&quot;:0,&quot;items&quot;:1},&quot;0&quot;:{&quot;margin&quot;:30,&quot;stagePadding&quot;:0,&quot;items&quot;:2}}}'>
                                <div class="client-carousel__one__item">
                                    <img decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-1-1.png"
                                        alt="brand-1-1" title="brand-1-1" class="client-carousel__one__image"> <img
                                        decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-1-1.png"
                                        alt="brand-hovewr-1-1" title="brand-hovewr-1-1"
                                        class="client-carousel__one__hover-image">
                                </div><!-- /.owl-slide-item-->
                                <div class="client-carousel__one__item">
                                    <img decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-1-2.png"
                                        alt="brand-1-2" title="brand-1-2" class="client-carousel__one__image"> <img
                                        decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-1-2.png"
                                        alt="brand-hovewr-1-2" title="brand-hovewr-1-2"
                                        class="client-carousel__one__hover-image">
                                </div><!-- /.owl-slide-item-->
                                <div class="client-carousel__one__item">
                                    <img decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-1-3.png"
                                        alt="brand-1-3" title="brand-1-3" class="client-carousel__one__image"> <img
                                        decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-1-3.png"
                                        alt="brand-hovewr-1-3" title="brand-hovewr-1-3"
                                        class="client-carousel__one__hover-image">
                                </div><!-- /.owl-slide-item-->
                                <div class="client-carousel__one__item">
                                    <img decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-1-4.png"
                                        alt="brand-1-4" title="brand-1-4" class="client-carousel__one__image"> <img
                                        decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-1-4.png"
                                        alt="brand-hovewr-1-4" title="brand-hovewr-1-4"
                                        class="client-carousel__one__hover-image">
                                </div><!-- /.owl-slide-item-->
                                <div class="client-carousel__one__item">
                                    <img decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-1-5.png"
                                        alt="brand-1-5" title="brand-1-5" class="client-carousel__one__image"> <img
                                        decoding="async"
                                        src="https://caritwp.bracketweb.com/wp-content/uploads/2025/11/brand-hovewr-1-5.png"
                                        alt="brand-hovewr-1-5" title="brand-hovewr-1-5"
                                        class="client-carousel__one__hover-image">
                                </div><!-- /.owl-slide-item-->
                            </div><!-- /.thm-owl__slider -->
                        </div><!-- /.container -->
                    </div><!-- /.client-carousel -->

                </div>
            </div>
        </div>
    </div>
    <!-- #page -->




@endsection


@section('footer_links')
    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/carit/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
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
    <link rel='stylesheet' id='elementor-post-865-css'
        href='https://caritwp.bracketweb.com/wp-content/uploads/elementor/css/post-865.css?ver=1765613410'
        media='all' />
    <link rel='stylesheet' id='elementor-post-921-css'
        href='https://caritwp.bracketweb.com/wp-content/uploads/elementor/css/post-921.css?ver=1765613410'
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js?ver=1768347138" id="js-cookie-js">
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/layerdrops-toolbar/assets/js/jQuery.style.switcher.min.js?ver=1768347138"
        id="jquery-style-switcher-js"></script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/layerdrops-toolbar/assets/js/color-switcher.js?ver=1768347138"
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
    <script id="wp-api-fetch-js-after">
        wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("https://caritwp.bracketweb.com/wp-json/"));
        wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("b8b623e8d3");
        wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
        wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
        wp.apiFetch.nonceEndpoint = "https://caritwp.bracketweb.com/wp-admin/admin-ajax.php?action=rest-nonce";
        (function() {
            if (!window.wp || !wp.apiFetch || !wp.apiFetch.use) {
                return;
            }
            wp.apiFetch.use(function(options, next) {
                var p = String((options && (options.path || options.url)) || "");
                try {
                    var u = new URL(p, window.location.origin);
                    p = (u.pathname || "") + (u.search || "");
                } catch (e) {}
                if (p.indexOf("/wp/v2/users/me") !== -1) {
                    return Promise.resolve(null);
                }
                return next(options);
            });
        })();
        //# sourceURL=wp-api-fetch-js-after
    </script>
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
            "nonce": "4eab8586ef",
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
            "nonce": "957a837213",
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
    <script id="wc-order-attribution-js-extra">
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
                "session": 30,
                "base64": false,
                "ajaxurl": "https://caritwp.bracketweb.com/wp-admin/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "utm_source_platform": "current.plt",
                "utm_creative_format": "current.fmt",
                "utm_marketing_tactic": "current.tct",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        //# sourceURL=wc-order-attribution-js-extra
    </script>
    <script
        src="https://caritwp.bracketweb.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=10.4.0"
        id="wc-order-attribution-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.33.4"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.33.4"
        id="elementor-frontend-modules-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js">
    </script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.33.4",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "container": true,
                "e_optimized_markup": true,
                "e_pro_free_trial_popup": true,
                "nested-elements": true,
                "home_screen": true,
                "global_classes_should_enforce_capabilities": true,
                "e_variables": true,
                "cloud-library": true,
                "e_opt_in_v4_page": true,
                "import-export-customization": true
            },
            "urls": {
                "assets": "https:\/\/caritwp.bracketweb.com\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/caritwp.bracketweb.com\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/caritwp.bracketweb.com\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "33879f9995"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 65,
                "title": "Carit%20%E2%80%93%20Charity%20Nonprofit%20%26%20Donation%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
        //# sourceURL=elementor-frontend-js-before
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
    <script id="carit-addon-script-js-extra">
        var carit_login_object = {
            "ajaxurl": "https://caritwp.bracketweb.com/wp-admin/admin-ajax.php",
            "login_redirect_url": "https://caritwp.bracketweb.com/",
            "registration_redirect_url": "https://caritwp.bracketweb.com/",
            "message": "\u003Cstrong\u003EError:\u003C/strong\u003EPlease use valid userName or password",
            "check_login": "no",
            "str_login": "Please login to add favorite!"
        };
        //# sourceURL=carit-addon-script-js-extra
    </script>
    <script src="https://caritwp.bracketweb.com/wp-content/plugins/carit-addon/assets/js/carit-addon.js?ver=1765544428"
        id="carit-addon-script-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/themes/carit/assets/vendors/isotope/isotope.js?ver=2.1.1"
        id="isotope-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script src="https://caritwp.bracketweb.com/wp-content/themes/carit/assets/js/carit-theme.js?ver=1768347138"
        id="carit-theme-js"></script>
    <script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"https://caritwp.bracketweb.com/wp-includes/js/wp-emoji-release.min.js?ver=6.9"}}
</script>
    <script type="module">
        /*! This file is auto-generated */
        const a = JSON.parse(document.getElementById("wp-emoji-settings").textContent),
            o = (window._wpemojiSettings = a, "wpEmojiSettingsSupports"),
            s = ["flag", "emoji"];

        function i(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function c(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data);
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0);
            const a = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data);
            return t.every((e, t) => e === a[t])
        }

        function p(e, t) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var n = e.getImageData(16, 16, 1, 1);
            for (let e = 0; e < n.data.length; e++)
                if (0 !== n.data[e]) return !1;
            return !0
        }

        function u(e, t, n, a) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e,
                        "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e,
                        "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                        "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                    );
                case "emoji":
                    return !a(e, "\ud83e\u1fac8")
            }
            return !1
        }

        function f(e, t, n, a) {
            let r;
            const o = (r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) : document.createElement("canvas")).getContext("2d", {
                    willReadFrequently: !0
                }),
                s = (o.textBaseline = "top", o.font = "600 32px Arial", {});
            return e.forEach(e => {
                s[e] = t(o, e, n, a)
            }), s
        }

        function r(e) {
            var t = document.createElement("script");
            t.src = e, t.defer = !0, document.head.appendChild(t)
        }
        a.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, new Promise(t => {
            let n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e
                        .timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), c
                            .toString(), p.toString()
                        ].join(",") + "));",
                        a = new Blob([e], {
                            type: "text/javascript"
                        });
                    const r = new Worker(URL.createObjectURL(a), {
                        name: "wpTestEmojiSupports"
                    });
                    return void(r.onmessage = e => {
                        i(n = e.data), r.terminate(), t(n)
                    })
                } catch (e) {}
                i(n = f(s, u, c, p))
            }
            t(n)
        }).then(e => {
            for (const n in e) a.supports[n] = e[n], a.supports.everything = a.supports.everything && a.supports[n],
                "flag" !== n && (a.supports.everythingExceptFlag = a.supports.everythingExceptFlag && a.supports[
                    n]);
            var t;
            a.supports.everythingExceptFlag = a.supports.everythingExceptFlag && !a.supports.flag, a.supports
                .everything || ((t = a.source || {}).concatemoji ? r(t.concatemoji) : t.wpemoji && t.twemoji && (r(t
                    .twemoji), r(t.wpemoji)))
        });
        //# sourceURL=https://caritwp.bracketweb.com/wp-includes/js/wp-emoji-loader.min.js
    </script>
    </div>
@endsection
