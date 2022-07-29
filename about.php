<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hancie Phago</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <meta name="description" content="Hancie Phago" />
        <meta property="og:site_name" content="Hancie" />
        <meta property="og:title" content="Hancie" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Hancie Phago" />
        <meta property="og:image" content="image/Hancie-Phago.jpg" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="800" />
        <meta property="twitter:card" content="summary_large_image" />
        <link href="https://fonts.googleapis.com/css?display=swap&family=Inter:300,300italic%7CFraunces:500,500italic,300,300italic" rel="stylesheet" type="text/css" />
        <?php 
include "nav.php";
?>
        <style>
            html,
            body,
            div,
            span,
            applet,
            object,
            iframe,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            blockquote,
            pre,
            a,
            abbr,
            acronym,
            address,
            big,
            cite,
            code,
            del,
            dfn,
            em,
            img,
            ins,
            kbd,
            q,
            s,
            samp,
            small,
            strike,
            strong,
            sub,
            sup,
            tt,
            var,
            b,
            u,
            i,
            center,
            dl,
            dt,
            dd,
            ol,
            ul,
            li,
            fieldset,
            form,
            label,
            legend,
            table,
            caption,
            tbody,
            tfoot,
            thead,
            tr,
            th,
            td,
            article,
            aside,
            canvas,
            details,
            embed,
            figure,
            figcaption,
            footer,
            header,
            hgroup,
            menu,
            nav,
            output,
            ruby,
            section,
            summary,
            time,
            mark,
            audio,
            video {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            article,
            aside,
            details,
            figcaption,
            figure,
            footer,
            header,
            hgroup,
            menu,
            nav,
            section {
                display: block;
            }
            body {
                line-height: 1;
            }
            ol,
            ul {
                list-style: none;
            }
            blockquote,
            q {
                quotes: none;
            }
            blockquote:before,
            blockquote:after,
            q:before,
            q:after {
                content: "";
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }
            body {
                -webkit-text-size-adjust: none;
            }
            mark {
                background-color: transparent;
                color: inherit;
            }
            input::-moz-focus-inner {
                border: 0;
                padding: 0;
            }
            input[type="text"],
            input[type="email"],
            select,
            textarea {
                -moz-appearance: none;
                -webkit-appearance: none;
                -ms-appearance: none;
                appearance: none;
            }
            *,
            *:before,
            *:after {
                box-sizing: border-box;
            }
            body {
                line-height: 1;
                min-height: var(--viewport-height);
                min-width: 320px;
                overflow-x: hidden;
                word-wrap: break-word;
                background-color: #e6e1df;
            }
            body:before {
                background-attachment: scroll;
                content: "";
                display: block;
                height: var(--background-height);
                left: 0;
                pointer-events: none;
                position: fixed;
                top: 0;
                transform: scale(1);
                width: 100vw;
                z-index: 0;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20512%20512%22%20width%3D%22512%22%20height%3D%22512%22%20preserveAspectRatio%3D%22none%22%3E%20%3Cstyle%3E%20path%20%7B%20fill%3A%20none%3B%20stroke-width%3A%201.01px%3B%20stroke%3A%20rgba(0,0,0,0.09)%3B%20vector-effect%3A%20non-scaling-stroke%3B%20%7D%20%3C%2Fstyle%3E%20%3Cpath%20d%3D%22M448%2C512c0-128-128-128-128-256S448%2C128%2C448%2C0%22%20%2F%3E%20%3Cpath%20d%3D%22M192%2C512c0-128-128-128-128-256S192%2C128%2C192%2C0%22%20%2F%3E%3C%2Fsvg%3E");
                background-size: 963px;
                background-position: center;
                background-repeat: repeat;
            }
            body:after {
                background-color: #e6e1df;
                content: "";
                display: block;
                height: 100%;
                left: 0;
                opacity: 0;
                position: fixed;
                top: 0;
                transform: scale(1);
                transition: opacity 0.375s ease-in-out 0s, visibility 0.375s 0s;
                visibility: hidden;
                width: 100%;
                z-index: 1;
            }
            body.is-loading:after {
                opacity: 1;
                visibility: visible;
            }
            :root {
                --background-height: 100vh;
                --site-language-alignment: left;
                --site-language-direction: ltr;
                --site-language-flex-alignment: flex-start;
                --viewport-height: 100vh;
            }
            html {
                font-size: 16pt;
            }
            u {
                text-decoration: underline;
            }
            strong {
                color: inherit;
                font-weight: bolder;
            }
            em {
                font-style: italic;
            }
            code {
                background-color: rgba(144, 144, 144, 0.25);
                border-radius: 0.25em;
                font-family: "Lucida Console", "Courier New", monospace;
                font-size: 0.9em;
                font-weight: normal;
                letter-spacing: 0;
                margin: 0 0.25em;
                padding: 0.25em 0.5em;
                text-indent: 0;
            }
            mark {
                background-color: rgba(144, 144, 144, 0.25);
            }
            s {
                text-decoration: line-through;
            }
            sub {
                font-size: smaller;
                vertical-align: sub;
            }
            sup {
                font-size: smaller;
                vertical-align: super;
            }
            a {
                color: inherit;
                text-decoration: underline;
                transition: color 0.25s ease;
            }
            #wrapper {
                -webkit-overflow-scrolling: touch;
                align-items: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                min-height: var(--viewport-height);
                overflow: hidden;
                position: relative;
                z-index: 2;
            }
            #main {
                --alignment: center;
                --flex-alignment: center;
                --border-radius-tl: 0;
                --border-radius-tr: 0;
                --border-radius-br: 0;
                --border-radius-bl: 0;
                align-items: center;
                display: flex;
                flex-grow: 0;
                flex-shrink: 0;
                justify-content: center;
                max-width: 100%;
                position: relative;
                text-align: var(--alignment);
                z-index: 1;
                transition: opacity 1s ease 0s, transform 1s ease 0s;
            }
            #main > .inner {
                --padding-horizontal: 4rem;
                --padding-vertical: 4rem;
                --spacing: 1.5rem;
                --width: 67rem;
                border-radius: var(--border-radius-tl) var(--border-radius-tr) var(--border-radius-br) var(--border-radius-bl);
                max-width: 100%;
                position: relative;
                width: var(--width);
                z-index: 1;
                padding: var(--padding-vertical) var(--padding-horizontal);
            }
            #main > .inner > * {
                margin-top: var(--spacing);
                margin-bottom: var(--spacing);
            }
            #main > .inner > :first-child {
                margin-top: 0 !important;
            }
            #main > .inner > :last-child {
                margin-bottom: 0 !important;
            }
            #main > .inner > .full {
                margin-left: calc(var(--padding-horizontal) * -1);
                max-width: calc(100% + calc(var(--padding-horizontal) * 2) + 0.4725px);
                width: calc(100% + calc(var(--padding-horizontal) * 2) + 0.4725px);
            }
            #main > .inner > .full:first-child {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
                margin-top: calc(var(--padding-vertical) * -1) !important;
            }
            #main > .inner > .full:last-child {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
                margin-bottom: calc(var(--padding-vertical) * -1) !important;
            }
            #main > .inner > .full.screen {
                border-radius: 0 !important;
                max-width: 100vw;
                position: relative;
                width: 100vw;
                left: 50%;
                margin-left: -50vw;
                right: auto;
            }
            body.is-loading #main {
                opacity: 0;
                transform: translateY(0.6375rem);
            }
            body.is-instant #main,
            body.is-instant #main > .inner > *,
            body.is-instant #main > .inner > section > * {
                transition: none !important;
            }
            body.is-instant:after {
                display: none !important;
                transition: none !important;
            }
            .image {
                display: block;
                line-height: 0;
                max-width: 100%;
                position: relative;
            }
            .image .frame {
                -webkit-backface-visibility: hidden;
                -webkit-transform: translate3d(0, 0, 0);
                display: inline-block;
                max-width: 100%;
                overflow: hidden;
                vertical-align: top;
                width: 100%;
            }
            .image .frame img {
                border-radius: 0 !important;
                max-width: 100%;
                vertical-align: top;
                width: inherit;
            }
            .image.full .frame {
                display: block;
            }
            .image.full:first-child .frame {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }
            .image.full:last-child .frame {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }
            #image01 .frame {
                width: 100vw;
                height: 30rem;
                border-radius: 0.625rem;
                box-shadow: 0rem 1.625rem 2.25rem 0rem rgba(0, 0, 0, 0.102);
                transition: none;
            }
            #image01 img {
                height: 100% !important;
                object-fit: cover;
                object-position: center;
                width: 100% !important;
            }
            #image01 .frame img {
                transition: none;
            }
            .container {
                position: relative;
            }
            .container > .wrapper {
                vertical-align: top;
                position: relative;
                max-width: 100%;
                border-radius: inherit;
            }
            .container > .wrapper > .inner {
                vertical-align: top;
                position: relative;
                max-width: 100%;
                border-radius: inherit;
                text-align: var(--alignment);
            }
            #main .container.full:first-child > .wrapper {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }
            #main .container.full:last-child > .wrapper {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }
            #main .container.full:first-child > .wrapper > .inner {
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }
            #main .container.full:last-child > .wrapper > .inner {
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }
            #container07 {
                --alignment: center;
                --flex-alignment: center;
                display: flex;
                width: 100%;
                align-items: center;
                justify-content: center;
                background-color: transparent;
            }
            #container07 > .wrapper > .inner {
                --gutters: 3.5rem;
                --padding-horizontal: 0rem;
                --padding-vertical: 0rem;
                padding: var(--padding-vertical) var(--padding-horizontal);
            }
            #container07 > .wrapper {
                max-width: var(--width);
                width: 100%;
            }
            #container07.default > .wrapper > .inner > * {
                margin-bottom: var(--spacing);
                margin-top: var(--spacing);
            }
            #container07.default > .wrapper > .inner > *:first-child {
                margin-top: 0 !important;
            }
            #container07.default > .wrapper > .inner > *:last-child {
                margin-bottom: 0 !important;
            }
            #container07.columns > .wrapper > .inner {
                flex-wrap: wrap;
                display: flex;
                align-items: center;
            }
            #container07.columns > .wrapper > .inner > * {
                flex-grow: 0;
                flex-shrink: 0;
                max-width: 100%;
                text-align: var(--alignment);
                padding: 0 0 0 var(--gutters);
            }
            #container07.columns > .wrapper > .inner > * > * {
                margin-bottom: var(--spacing);
                margin-top: var(--spacing);
            }
            #container07.columns > .wrapper > .inner > * > *:first-child {
                margin-top: 0 !important;
            }
            #container07.columns > .wrapper > .inner > * > *:last-child {
                margin-bottom: 0 !important;
            }
            #container07.columns > .wrapper > .inner > *:first-child {
                margin-left: calc(var(--gutters) * -1);
            }
            #container07.default > .wrapper > .inner > .full {
                margin-left: calc(var(--padding-horizontal) * -1);
                max-width: none !important;
                width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
            }
            #container07.default > .wrapper > .inner > .full:first-child {
                margin-top: calc(var(--padding-vertical) * -1) !important;
                border-top-left-radius: inherit;
                border-top-right-radius: inherit;
            }
            #container07.default > .wrapper > .inner > .full:last-child {
                margin-bottom: calc(var(--padding-vertical) * -1) !important;
                border-bottom-left-radius: inherit;
                border-bottom-right-radius: inherit;
            }
            #container07.columns > .wrapper > .inner > div > .full {
                margin-left: calc(var(--gutters) * -0.5);
                max-width: none !important;
                width: calc(100% + var(--gutters) + 0.4725px);
            }
            #container07.columns > .wrapper > .inner > div:first-child > .full {
                margin-left: calc(var(--padding-horizontal) * -1);
                width: calc(100% + var(--padding-horizontal) + calc(var(--gutters) * 0.5) + 0.4725px);
            }
            #container07.columns > .wrapper > .inner > div:last-child > .full {
                width: calc(100% + var(--padding-horizontal) + calc(var(--gutters) * 0.5) + 0.4725px);
            }
            #container07.columns > .wrapper > .inner > div > .full:first-child {
                margin-top: calc(var(--padding-vertical) * -1) !important;
            }
            #container07.columns > .wrapper > .inner > div > .full:last-child {
                margin-bottom: calc(var(--padding-vertical) * -1) !important;
            }
            #container07.columns > .wrapper > .inner > .full {
                align-self: stretch;
            }
            #container07.columns > .wrapper > .inner > .full:first-child {
                border-bottom-left-radius: inherit;
                border-top-left-radius: inherit;
            }
            #container07.columns > .wrapper > .inner > .full:last-child {
                border-bottom-right-radius: inherit;
                border-top-right-radius: inherit;
            }
            #container07.columns > .wrapper > .inner > .full > .full:first-child:last-child {
                border-radius: inherit;
                height: calc(100% + (var(--padding-vertical) * 2));
            }
            #container07.columns > .wrapper > .inner > .full > .full:first-child:last-child > * {
                border-radius: inherit;
                height: 100%;
                position: absolute;
                width: 100%;
            }
            #container07 > .wrapper > .inner > :nth-child(1) {
                width: calc(50% + 1.75rem);
            }
            #container07 > .wrapper > .inner > :nth-child(2) {
                width: calc(50% + 1.75rem);
            }
            h1,
            h2,
            h3,
            p {
                direction: var(--site-language-direction);
                position: relative;
            }
            h1 span.p,
            h2 span.p,
            h3 span.p,
            p span.p {
                display: block;
                position: relative;
            }
            h1 span[style],
            h2 span[style],
            h3 span[style],
            p span[style],
            h1 strong,
            h2 strong,
            h3 strong,
            p strong,
            h1 a,
            h2 a,
            h3 a,
            p a,
            h1 code,
            h2 code,
            h3 code,
            p code,
            h1 mark,
            h2 mark,
            h3 mark,
            p mark {
                -webkit-text-fill-color: currentcolor;
            }
            #text03 {
                text-transform: uppercase;
                color: #325d80;
                font-family: "Inter", sans-serif;
                letter-spacing: 0.3rem;
                width: calc(100% + 0.3rem);
                font-size: 0.875em;
                line-height: 1.875;
                font-weight: 300;
            }
            #text03 mark {
                color: #ff0000;
                background-color: transparent;
            }
            #text03 a {
                text-decoration: underline;
            }
            #text03 a:hover {
                text-decoration: none;
            }
            #text03 span.p:nth-child(n + 2) {
                margin-top: 1rem;
            }
            #text02 {
                color: rgba(0, 0, 0, 0.702);
                font-family: "Fraunces", serif;
                letter-spacing: -0.025rem;
                width: 100%;
                font-size: 3.75em;
                line-height: 1.25;
                font-weight: 500;
            }
            #text02 mark {
                color: #8ab8a8;
                background-color: transparent;
            }
            #text02 a {
                text-decoration: underline;
            }
            #text02 a:hover {
                text-decoration: none;
            }
            #text02 span.p:nth-child(n + 2) {
                margin-top: 1rem;
            }
            #text10 {
                color: rgba(0, 0, 0, 0.49);
                font-family: "Inter", sans-serif;
                font-size: 1em;
                line-height: 2;
                font-weight: 300;
            }
            #text10 mark {
                color: #ff0000;
                background-color: transparent;
            }
            #text10 a {
                text-decoration: underline;
            }
            #text10 a:hover {
                text-decoration: none;
            }
            #text10 span.p:nth-child(n + 2) {
                margin-top: 1rem;
            }
            hr {
                border: 0;
                padding: 0;
                position: relative;
                width: 100%;
            }
            hr:before {
                content: "";
                display: inline-block;
                max-width: 100%;
                vertical-align: middle;
            }
            #divider01:before {
                width: 2rem;
                border-top: solid 2px rgba(0, 0, 0, 0.169);
                height: 2px;
                margin-top: -1px;
            }
            .buttons {
                cursor: default;
                display: flex;
                justify-content: var(--flex-alignment);
                letter-spacing: 0;
                padding: 0;
            }
            .buttons li {
                max-width: 100%;
            }
            .buttons li a {
                align-items: center;
                justify-content: center;
                max-width: 100%;
                text-align: center;
                text-decoration: none;
                vertical-align: middle;
                white-space: nowrap;
            }
            #buttons01 {
                gap: 0.75rem;
                flex-direction: row;
                flex-wrap: wrap;
            }
            #buttons01:not(:first-child) {
                margin-top: 2.375rem !important;
            }
            #buttons01:not(:last-child) {
                margin-bottom: 2.375rem !important;
            }
            #buttons01 li a {
                display: flex;
                width: auto;
                height: 3.5rem;
                line-height: 3.5rem;
                padding: 0 1.75rem;
                vertical-align: middle;
                font-family: "Fraunces", serif;
                font-size: 1em;
                font-weight: 300;
                border-radius: 0.375rem;
                box-shadow: 0rem 0.5rem 1.25rem 0rem rgba(0, 0, 0, 0.102);
                transition: transform 0.125s ease, color 0.125s ease, background-color 0.125s ease, border-color 0.125s ease;
            }
            #buttons01 li a svg {
                display: block;
                fill: #ffffff;
                height: 100%;
                min-width: 16px;
                width: 1em;
                margin-left: -0.125em;
                margin-right: calc(0.5em + 0rem);
                transition: fill 0.125s ease;
            }
            #buttons01 li a .label {
                direction: var(--site-language-direction);
            }
            #buttons01 .button {
                background-color: #325d80;
                color: #ffffff;
            }
            #buttons01 .button:hover {
                background-color: #b89a8f !important;
            }
            #buttons01 li a:hover {
                transform: scale(1.025);
            }
            .icons {
                display: flex;
                flex-wrap: wrap;
                justify-content: var(--flex-alignment);
                letter-spacing: 0;
                padding: 0;
            }
            .icons li {
                position: relative;
                z-index: 1;
            }
            .icons li a {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .icons li a svg {
                display: block;
                position: relative;
            }
            .icons li a + svg {
                display: block;
                height: 100%;
                left: 0;
                pointer-events: none;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: -1;
            }
            .icons li a .label {
                display: none;
            }
            #icons01 {
                font-size: 1.25em;
                gap: 1.25rem;
            }
            #icons01:not(:first-child) {
                margin-top: 2.625rem !important;
            }
            #icons01:not(:last-child) {
                margin-bottom: 2.625rem !important;
            }
            #icons01 li a {
                border-radius: 100%;
                height: 2em;
                width: 2em;
                transition: transform 0.125s ease, color 0.125s ease, background-color 0.125s ease, border-color 0.125s ease;
            }
            #icons01 li a svg {
                height: 60%;
                width: 60%;
                transition: fill 0.125s ease;
            }
            #icons01 a svg {
                fill: #325d80;
            }
            #icons01 a {
                border: solid 1px rgba(0, 0, 0, 0.169);
            }
            #icons01 a:hover {
                border-color: #b89a8f !important;
            }
            #icons01 a:hover svg {
                fill: #b89a8f !important;
            }
            #icons01 li a + svg {
                transition: transform 0.125s ease, fill 0.125s ease, stroke 0.125s ease;
            }
            #icons01 li a:hover {
                transform: scale(1.06);
            }
            #icons01 li a:hover + svg {
                transform: scale(1.06);
            }
            .icc-credits {
                display: block;
                opacity: 1 !important;
                position: relative;
                transition-delay: 0s !important;
            }
            .icc-credits span {
                border-radius: 24px;
                cursor: pointer;
                display: inline-block;
                font-family: Arial, sans-serif;
                font-size: 12px;
                letter-spacing: 0;
                line-height: 1;
                position: relative;
                text-decoration: none;
                width: auto;
            }
            .icc-credits span a {
                display: inline-block;
                padding: 0.5em 0.375em;
                position: relative;
                text-decoration: none;
                transition: color 0.25s ease, transform 0.25s ease;
                z-index: 1;
            }
            .icc-credits span a:before {
                content: "( ";
                opacity: 1;
                transition: opacity 0.25s ease;
            }
            .icc-credits span a:after {
                content: " )";
                opacity: 1;
                transition: opacity 0.25s ease;
            }
            .icc-credits span::after {
                background-image: linear-gradient(30deg, #a464a1 15%, #3b5dad 85%);
                border-radius: inherit;
                box-shadow: 0 0.25em 1.25em 0 rgba(0, 0, 0, 0.25);
                content: "";
                display: block;
                height: calc(100% + 2px);
                left: -1px;
                opacity: 0;
                pointer-events: none;
                position: absolute;
                top: -1px;
                transition: opacity 0.25s ease, box-shadow 0.25s ease, transform 0.25s ease;
                width: calc(100% + 2px);
            }
            .icc-credits span:hover {
                text-transform: none !important;
            }
            .icc-credits span:hover a {
                color: #ffffff !important;
                transform: scale(1.1) translateY(-0.05rem);
            }
            .icc-credits span:hover a:before {
                opacity: 0;
            }
            .icc-credits span:hover a:after {
                opacity: 0;
            }
            .icc-credits span:hover::after {
                opacity: 1;
                transform: scale(1.1) translateY(-0.05rem);
            }
            #credits span {
                color: rgba(0, 0, 0, 0.498);
                margin-top: 1.5rem !important;
            }
            @media (max-width: 1920px) {
            }
            @media (max-width: 1680px) {
                html {
                    font-size: 12pt;
                }
            }
            @media (max-width: 1280px) {
                html {
                    font-size: 12pt;
                }
            }
            @media (max-width: 1024px) {
            }
            @media (max-width: 980px) {
                html {
                    font-size: 10pt;
                }
            }
            @media (max-width: 736px) {
                html {
                    font-size: 12pt;
                }
                #main > .inner {
                    --padding-horizontal: 1.5rem;
                    --padding-vertical: 1.5rem;
                    --spacing: 1.5rem;
                }
                #image01 .frame {
                    width: 100vw;
                    height: 18.75rem !important;
                }
                #image01 img {
                    height: 100% !important;
                    object-fit: cover;
                    object-position: center;
                    width: 100% !important;
                }
                #container07 > .wrapper > .inner {
                    --gutters: 3rem;
                    --padding-horizontal: 0rem;
                    --padding-vertical: 0rem;
                }
                #container07.columns > .wrapper > .inner {
                    flex-direction: column !important;
                    flex-wrap: nowrap !important;
                }
                #container07.columns > .wrapper > .inner > span {
                    height: 0;
                    margin-top: calc(var(--gutters) * -1);
                    pointer-events: none;
                    visibility: hidden;
                }
                #container07.columns > .wrapper > .inner > *:first-child {
                    margin-left: 0 !important;
                    padding-top: 0 !important;
                }
                #container07.columns > .wrapper > .inner > * {
                    padding: calc(var(--gutters) * 0.5) 0 !important;
                }
                #container07.columns > .wrapper > .inner > *:last-child {
                    padding-bottom: 0 !important;
                }
                #container07.columns > .wrapper > .inner > div > .full {
                    margin-left: calc(var(--padding-horizontal) * -1);
                    width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
                }
                #container07.columns > .wrapper > .inner > div:first-of-type > .full {
                    margin-left: calc(var(--padding-horizontal) * -1);
                    width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
                }
                #container07.columns > .wrapper > .inner > div:last-of-type > .full {
                    margin-left: calc(var(--padding-horizontal) * -1);
                    width: calc(100% + (var(--padding-horizontal) * 2) + 0.4725px);
                }
                #container07.columns > .wrapper > .inner > div > .full:first-child {
                    margin-top: calc(var(--gutters) * -0.5) !important;
                }
                #container07.columns > .wrapper > .inner > div > .full:last-child {
                    margin-bottom: calc(var(--gutters) * -0.5) !important;
                }
                #container07.columns > .wrapper > .inner > div:first-of-type > .full:first-child {
                    margin-top: calc(var(--padding-vertical) * -1) !important;
                }
                #container07.columns > .wrapper > .inner > div:last-of-type > .full:last-child {
                    margin-bottom: calc(var(--padding-vertical) * -1) !important;
                }
                #container07.columns > .wrapper > .inner > div:first-of-type,
                #container07.columns > .wrapper > .inner > div:first-of-type > .full:first-child {
                    border-top-left-radius: inherit;
                    border-top-right-radius: inherit;
                }
                #container07.columns > .wrapper > .inner > div:last-of-type,
                #container07.columns > .wrapper > .inner > div:last-of-type > .full:last-child {
                    border-bottom-left-radius: inherit;
                    border-bottom-right-radius: inherit;
                }
                #container07.columns > .wrapper > .inner > div:first-of-type,
                #container07.columns > .wrapper > .inner > div:first-of-type > .full:last-child {
                    border-bottom-left-radius: 0 !important;
                }
                #container07.columns > .wrapper > .inner > div:last-of-type,
                #container07.columns > .wrapper > .inner > div:last-of-type > .full:first-child {
                    border-top-right-radius: 0 !important;
                }
                #container07.columns > .wrapper > .inner > .full > .full:first-child:last-child {
                    height: auto;
                }
                #container07.columns > .wrapper > .inner > .full > .full:first-child:last-child > * {
                    height: auto;
                    position: relative;
                    width: auto;
                }
                #container07 > .wrapper > .inner > :nth-child(1) {
                    width: 100% !important;
                    min-height: 100% !important;
                }
                #container07 > .wrapper > .inner > :nth-child(2) {
                    width: 100% !important;
                    min-height: 100% !important;
                }
                #text03 {
                    letter-spacing: 0.2625rem;
                    width: calc(100% + 0.2625rem);
                    font-size: 0.875em;
                    line-height: 1.875;
                }
                #text02 {
                    letter-spacing: -0.021875rem;
                    width: 100%;
                    font-size: 2.625em;
                    line-height: 1.25;
                }
                #text10 {
                    letter-spacing: 0rem;
                    width: 100%;
                    font-size: 1em;
                    line-height: 2;
                }
                #divider01:before {
                    width: 2rem;
                }
                #buttons01:not(:first-child) {
                    margin-top: 1.78125rem !important;
                }
                #buttons01:not(:last-child) {
                    margin-bottom: 1.78125rem !important;
                }
                #buttons01 li a {
                    letter-spacing: 0rem;
                    font-size: 1em;
                }
                #buttons01 li a svg {
                    width: 1em;
                }
                #icons01 {
                    font-size: 1.5em;
                    gap: 1.25rem;
                }
                #icons01:not(:first-child) {
                    margin-top: 1.96875rem !important;
                }
                #icons01:not(:last-child) {
                    margin-bottom: 1.96875rem !important;
                }
            }
            @media (max-width: 480px) {
                #main > .inner {
                    --spacing: 1.3125rem;
                }
                #image01 .frame {
                    height: 15rem !important;
                }
                #buttons01 {
                    flex-direction: column;
                    flex-wrap: nowrap;
                }
                #buttons01 li a {
                    display: inline-flex;
                    max-width: 32rem;
                    width: 100%;
                }
            }
            @media (max-width: 360px) {
                #main > .inner {
                    --padding-horizontal: 1.125rem;
                    --padding-vertical: 1.125rem;
                    --spacing: 1.125rem;
                }
                #image01 .frame {
                    height: 13.125rem !important;
                }
                #container07 > .wrapper > .inner {
                    --gutters: 3rem;
                    --padding-horizontal: 0rem;
                    --padding-vertical: 0rem;
                }
                #container07 > .wrapper > .inner > :nth-child(1) {
                    width: calc(50% + 1.5rem);
                }
                #container07 > .wrapper > .inner > :nth-child(2) {
                    width: calc(50% + 1.5rem);
                }
                #text03 {
                    font-size: 0.875em;
                }
                #text02 {
                    font-size: 2.625em;
                }
                #text10 {
                    font-size: 1em;
                }
                #buttons01 {
                    gap: 0.5625rem;
                }
                #icons01 {
                    gap: 0.9375rem;
                }
            }
        </style>
        <noscript>
            <style>
                body {
                    overflow: auto !important;
                }
                body:after {
                    display: none !important;
                }
                #main > .inner {
                    opacity: 1 !important;
                }
                #main {
                    opacity: 1 !important;
                    transform: none !important;
                    transition: none !important;
                    filter: none !important;
                }
                #main > .inner > section {
                    opacity: 1 !important;
                    transform: none !important;
                    transition: none !important;
                    filter: none !important;
                }
            </style>
        </noscript>
    </head>
    <body class="is-loading">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" display="none" width="0" height="0">
            <symbol id="icon-90a" viewBox="0 0 40 40">
                <path
                    d="M37.3,15.3v15.3c0,0.8-0.3,1.6-0.9,2.2c-0.6,0.6-1.4,0.9-2.2,0.9H5.8c-0.8,0-1.6-0.3-2.2-0.9s-0.9-1.4-0.9-2.2V15.3 c0.5,0.6,1.2,1.1,2,1.7c4.7,3.1,7.9,5.4,9.6,6.7c0.7,0.5,1.4,0.9,1.8,1.2c0.4,0.3,1,0.6,1.9,0.9c0.7,0.3,1.5,0.5,2.1,0.5l0,0 c0.6,0,1.4-0.2,2.1-0.5c0.7-0.3,1.4-0.6,1.9-0.9c0.4-0.3,1-0.7,1.8-1.2c2.2-1.6,5.4-3.8,9.6-6.7C36.1,16.5,36.7,15.9,37.3,15.3 L37.3,15.3z M37.3,9.6c0,1-0.3,2-0.9,2.9c-0.6,0.9-1.5,1.8-2.4,2.4c-4.9,3.3-7.9,5.4-9,6.2c-0.1,0.1-0.4,0.3-0.8,0.6 c-0.4,0.3-0.7,0.5-1,0.7c-0.3,0.2-0.6,0.4-1,0.6c-0.4,0.2-0.7,0.4-1.1,0.5c-0.4,0.1-0.6,0.2-0.9,0.2l0,0c-0.3,0-0.6-0.1-0.9-0.2 c-0.3-0.1-0.7-0.3-1.1-0.5c-0.4-0.2-0.7-0.4-1-0.6c-0.3-0.2-0.6-0.4-1-0.7c-0.4-0.3-0.7-0.5-0.8-0.6c-1.1-0.8-2.8-2-5.1-3.5 c-2.3-1.6-3.3-2.4-3.7-2.7c-0.8-0.5-1.6-1.2-2.3-2.2s-1-1.9-1-2.6c0-1,0.3-1.9,0.8-2.5c0.5-0.6,1.2-1,2.3-1h28.4 c0.8,0,1.6,0.3,2.2,0.9C37.1,8.1,37.3,8.8,37.3,9.6L37.3,9.6z"
                />
            </symbol>
            <symbol id="icon-98e" viewBox="0 0 40 40">
                <path
                    d="M35.7,13c-1.6-2-3.8-3.5-6.5-4.7c-2.8-1.1-5.8-1.7-9-1.7s-6.3,0.6-9,1.7C8.3,9.4,6.1,11,4.5,13 c-1.6,2-2.4,4.1-2.4,6.5c0,2,0.6,3.9,1.8,5.7c1.2,1.8,2.9,3.2,5,4.4c-0.1,0.5-0.3,1-0.5,1.5c-0.2,0.5-0.4,0.9-0.5,1.2 c-0.2,0.3-0.4,0.7-0.7,1c-0.3,0.4-0.5,0.6-0.6,0.8c-0.1,0.2-0.4,0.4-0.7,0.8c-0.3,0.4-0.5,0.6-0.6,0.7c0,0-0.1,0.1-0.2,0.2 C5,35.8,5,35.8,5,35.8L4.8,36c-0.1,0.1-0.1,0.2-0.1,0.2c0,0,0,0.1,0,0.2c0,0.1,0,0.2,0,0.2v0c0.1,0.2,0.2,0.4,0.3,0.6 c0.2,0.1,0.3,0.2,0.5,0.2h0.1C6.6,37.3,7.3,37.2,8,37c3.5-0.9,6.6-2.5,9.2-4.9c1,0.1,2,0.2,2.9,0.2c3.3,0,6.3-0.6,9-1.7 c2.8-1.1,4.9-2.7,6.5-4.7c1.6-2,2.4-4.1,2.4-6.5C38.1,17.1,37.3,14.9,35.7,13z M33.5,24.6c-1.4,1.6-3.3,2.8-5.7,3.8 c-2.4,0.9-4.9,1.4-7.7,1.4c-0.8,0-1.7-0.1-2.6-0.2l-1.1-0.1l-0.9,0.8c-1.6,1.4-3.5,2.6-5.5,3.4c0.6-1.1,1.1-2.2,1.4-3.5l0.5-1.9 l-1.7-1c-1.7-1-3.1-2.2-4-3.5c-1-1.4-1.4-2.8-1.4-4.3c0-1.8,0.7-3.5,2.1-5.1c1.4-1.6,3.3-2.8,5.7-3.8s4.9-1.4,7.7-1.4 s5.3,0.5,7.7,1.4s4.3,2.2,5.7,3.8c1.4,1.6,2.1,3.3,2.1,5.1C35.6,21.3,34.9,23,33.5,24.6z"
                />
            </symbol>
            <symbol id="icon-910" viewBox="0 0 40 40">
                <path
                    d="M20,7c4.2,0,4.7,0,6.3,0.1c1.5,0.1,2.3,0.3,3,0.5C30,8,30.5,8.3,31.1,8.9c0.5,0.5,0.9,1.1,1.2,1.8c0.2,0.5,0.5,1.4,0.5,3 C33,15.3,33,15.8,33,20s0,4.7-0.1,6.3c-0.1,1.5-0.3,2.3-0.5,3c-0.3,0.7-0.6,1.2-1.2,1.8c-0.5,0.5-1.1,0.9-1.8,1.2 c-0.5,0.2-1.4,0.5-3,0.5C24.7,33,24.2,33,20,33s-4.7,0-6.3-0.1c-1.5-0.1-2.3-0.3-3-0.5C10,32,9.5,31.7,8.9,31.1 C8.4,30.6,8,30,7.7,29.3c-0.2-0.5-0.5-1.4-0.5-3C7,24.7,7,24.2,7,20s0-4.7,0.1-6.3c0.1-1.5,0.3-2.3,0.5-3C8,10,8.3,9.5,8.9,8.9 C9.4,8.4,10,8,10.7,7.7c0.5-0.2,1.4-0.5,3-0.5C15.3,7.1,15.8,7,20,7z M20,4.3c-4.3,0-4.8,0-6.5,0.1c-1.6,0-2.8,0.3-3.8,0.7 C8.7,5.5,7.8,6,6.9,6.9C6,7.8,5.5,8.7,5.1,9.7c-0.4,1-0.6,2.1-0.7,3.8c-0.1,1.7-0.1,2.2-0.1,6.5s0,4.8,0.1,6.5 c0,1.6,0.3,2.8,0.7,3.8c0.4,1,0.9,1.9,1.8,2.8c0.9,0.9,1.7,1.4,2.8,1.8c1,0.4,2.1,0.6,3.8,0.7c1.6,0.1,2.2,0.1,6.5,0.1 s4.8,0,6.5-0.1c1.6-0.1,2.9-0.3,3.8-0.7c1-0.4,1.9-0.9,2.8-1.8c0.9-0.9,1.4-1.7,1.8-2.8c0.4-1,0.6-2.1,0.7-3.8 c0.1-1.6,0.1-2.2,0.1-6.5s0-4.8-0.1-6.5c-0.1-1.6-0.3-2.9-0.7-3.8c-0.4-1-0.9-1.9-1.8-2.8c-0.9-0.9-1.7-1.4-2.8-1.8 c-1-0.4-2.1-0.6-3.8-0.7C24.8,4.3,24.3,4.3,20,4.3L20,4.3L20,4.3z"
                />
                <path d="M20,11.9c-4.5,0-8.1,3.7-8.1,8.1s3.7,8.1,8.1,8.1s8.1-3.7,8.1-8.1S24.5,11.9,20,11.9z M20,25.2c-2.9,0-5.2-2.3-5.2-5.2 s2.3-5.2,5.2-5.2s5.2,2.3,5.2,5.2S22.9,25.2,20,25.2z" />
                <path d="M30.6,11.6c0,1-0.8,1.9-1.9,1.9c-1,0-1.9-0.8-1.9-1.9s0.8-1.9,1.9-1.9C29.8,9.7,30.6,10.5,30.6,11.6z" />
            </symbol>
            <symbol id="icon-a00" viewBox="0 0 40 40">
                <path
                    d="M33.3,35.6c-0.8-0.4-1.6-0.9-2.4-1.3c-0.9-0.5-1.7-1-2.6-1.4c-0.7-0.4-1.5-0.8-2.2-1.2c-0.9-0.5-1.8-1-2.7-1.5 c-1.1-0.6-2.3-1.3-3.4-1.9c-0.1,0-0.2,0-0.3,0c-0.3,0.2-0.6,0.3-1,0.5c-1.4,0.8-2.8,1.5-4.2,2.3c-1.2,0.7-2.4,1.3-3.5,2 c-1.6,0.9-3.1,1.7-4.7,2.6C6.3,35.8,6.2,35.9,6,36c0,0-0.1,0-0.1,0c0-0.1,0-0.1,0-0.2c0-5.8,0-11.6,0-17.4c0.1,0,0.2,0,0.3,0 c9.1,0,18.3,0,27.4,0c0.1,0,0.3,0,0.4,0c0,5.8,0,11.7,0,17.5C33.8,35.8,33.6,35.7,33.3,35.6z M6.3,15c-0.1,0-0.3,0-0.4,0 c0-1.3,0-2.5,0-3.8c0.1,0,0.3,0,0.4,0c9.1,0,18.2,0,27.3,0c0.1,0,0.3,0,0.4,0c0,1.3,0,2.5,0,3.8c-0.1,0-0.3,0-0.4,0 C24.5,15,15.4,15,6.3,15z M6.2,7.8c-0.1,0-0.2,0-0.3,0c0-1.3,0-2.5,0-3.8C6,4,6,4,6,4c9.4,0,18.7,0,28.1,0c0,1.3,0,2.5,0,3.8 c-0.1,0-0.3,0-0.4,0C24.5,7.8,15.4,7.8,6.2,7.8z"
                />
            </symbol>
            <symbol id="icon-905" viewBox="0 0 40 40">
                <path
                    d="M36.3,10.2c-1,1.3-2.1,2.5-3.4,3.5c0,0.2,0,0.4,0,1c0,1.7-0.2,3.6-0.9,5.3c-0.6,1.7-1.2,3.5-2.4,5.1 c-1.1,1.5-2.3,3.1-3.7,4.3c-1.4,1.2-3.3,2.3-5.3,3c-2.1,0.8-4.2,1.2-6.6,1.2c-3.6,0-7-1-10.2-3c0.4,0,1.1,0.1,1.5,0.1 c3.1,0,5.9-1,8.2-2.9c-1.4,0-2.7-0.4-3.8-1.3c-1.2-1-1.9-2-2.2-3.3c0.4,0.1,1,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-1.4-0.3-2.7-1.1-3.7-2.3s-1.4-2.6-1.4-4.2v-0.1c1,0.6,2,0.9,3,0.9c-1-0.6-1.5-1.3-2.2-2.4c-0.6-1-0.9-2.1-0.9-3.3s0.3-2.3,1-3.4 c1.5,2.1,3.6,3.6,6,4.9s4.9,2,7.6,2.1c-0.1-0.6-0.1-1.1-0.1-1.4c0-1.8,0.8-3.5,2-4.7c1.2-1.2,2.9-2,4.7-2c2,0,3.6,0.8,4.8,2.1 c1.4-0.3,2.9-0.9,4.2-1.5c-0.4,1.5-1.4,2.7-2.9,3.6C33.8,11.2,35.1,10.9,36.3,10.2L36.3,10.2z"
                />
            </symbol>
        </svg>
        <div id="wrapper">
            <div id="main">
                <div class="inner">
                    <div id="container07" class="container columns">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <div id="image01" class="image" data-position="center">
                                        <span class="frame"><img src="images/Hancie-Phago.jpg" alt="" /></span>
                                    </div>
                                </div>
                                <div>
                                    <h2 id="text03">NH GROUP</h2>
                                    <hr id="divider01" />
                                    <h1 id="text02">Hancie Phago</h1>
                                    <p id="text10">Hello! My name is Hancie Phago. I am a software developer and currently studying software engineering at PCPS College. Visit my website if you&#039;d like to get in touch with me.</p>
                                    <ul id="buttons01" class="buttons">
                                        <li>
                                            <a href="/cdn-cgi/l/email-protection#771f1619141e12071f16101837101a161e1b5914181a" class="button n01">
                                                <svg><use xlink:href="#icon-90a"></use></svg><span class="label">Email me</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul id="icons01" class="icons">
                                        <li>
                                            <a class="n01" href="https://hanciephago.com.np/">
                                                <svg><use xlink:href="#icon-a00"></use></svg><span class="label">Substack</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="n02" href="https://www.instagram.com/hancie720/">
                                                <svg><use xlink:href="#icon-910"></use></svg><span class="label">Instagram</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="n03" href="https://twitter.com/hancie_phago">
                                                <svg><use xlink:href="#icon-905"></use></svg><span class="label">Twitter</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="n04" href="https://hanciephago.com.np/">
                                                <svg><use xlink:href="#icon-98e"></use></svg><span class="label">Message (Alt)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            (function () {
                var on = addEventListener,
                    $ = function (q) {
                        return document.querySelector(q);
                    },
                    $$ = function (q) {
                        return document.querySelectorAll(q);
                    },
                    $body = document.body,
                    $inner = $(".inner"),
                    client = (function () {
                        var o = { browser: "other", browserVersion: 0, os: "other", osVersion: 0, mobile: false, canUse: null, flags: { lsdUnits: false } },
                            ua = navigator.userAgent,
                            a,
                            i;
                        a = [
                            ["firefox", /Firefox\/([0-9\.]+)/],
                            ["edge", /Edge\/([0-9\.]+)/],
                            ["safari", /Version\/([0-9\.]+).+Safari/],
                            ["chrome", /Chrome\/([0-9\.]+)/],
                            ["chrome", /CriOS\/([0-9\.]+)/],
                            ["ie", /Trident\/.+rv:([0-9]+)/],
                        ];
                        for (i = 0; i < a.length; i++) {
                            if (ua.match(a[i][1])) {
                                o.browser = a[i][0];
                                o.browserVersion = parseFloat(RegExp.$1);
                                break;
                            }
                        }
                        a = [
                            [
                                "ios",
                                /([0-9_]+) like Mac OS X/,
                                function (v) {
                                    return v.replace("_", ".").replace("_", "");
                                },
                            ],
                            [
                                "ios",
                                /CPU like Mac OS X/,
                                function (v) {
                                    return 0;
                                },
                            ],
                            [
                                "ios",
                                /iPad; CPU/,
                                function (v) {
                                    return 0;
                                },
                            ],
                            ["android", /Android ([0-9\.]+)/, null],
                            [
                                "mac",
                                /Macintosh.+Mac OS X ([0-9_]+)/,
                                function (v) {
                                    return v.replace("_", ".").replace("_", "");
                                },
                            ],
                            ["windows", /Windows NT ([0-9\.]+)/, null],
                            ["undefined", /Undefined/, null],
                        ];
                        for (i = 0; i < a.length; i++) {
                            if (ua.match(a[i][1])) {
                                o.os = a[i][0];
                                o.osVersion = parseFloat(a[i][2] ? a[i][2](RegExp.$1) : RegExp.$1);
                                break;
                            }
                        }
                        if (
                            o.os == "mac" &&
                            "ontouchstart" in window &&
                            ((screen.width == 1024 && screen.height == 1366) || (screen.width == 834 && screen.height == 1112) || (screen.width == 810 && screen.height == 1080) || (screen.width == 768 && screen.height == 1024))
                        )
                            o.os = "ios";
                        o.mobile = o.os == "android" || o.os == "ios";
                        var _canUse = document.createElement("div");
                        o.canUse = function (property, value) {
                            var style;
                            style = _canUse.style;
                            if (!(property in style)) return false;
                            if (typeof value !== "undefined") {
                                style[property] = value;
                                if (style[property] == "") return false;
                            }
                            return true;
                        };
                        o.flags.lsdUnits = o.canUse("width", "100dvw");
                        return o;
                    })(),
                    trigger = function (t) {
                        dispatchEvent(new Event(t));
                    },
                    cssRules = function (selectorText) {
                        var ss = document.styleSheets,
                            a = [],
                            f = function (s) {
                                var r = s.cssRules,
                                    i;
                                for (i = 0; i < r.length; i++) {
                                    if (r[i] instanceof CSSMediaRule && matchMedia(r[i].conditionText).matches) f(r[i]);
                                    else if (r[i] instanceof CSSStyleRule && r[i].selectorText == selectorText) a.push(r[i]);
                                }
                            },
                            x,
                            i;
                        for (i = 0; i < ss.length; i++) f(ss[i]);
                        return a;
                    },
                    thisHash = function () {
                        var h = location.hash ? location.hash.substring(1) : null,
                            a;
                        if (!h) return null;
                        if (h.match(/\?/)) {
                            a = h.split("?");
                            h = a[0];
                            history.replaceState(undefined, undefined, "#" + h);
                            window.location.search = a[1];
                        }
                        if (h.length > 0 && !h.match(/^[a-zA-Z]/)) h = "x" + h;
                        if (typeof h == "string") h = h.toLowerCase();
                        return h;
                    },
                    scrollToElement = function (e, style, duration) {
                        var y, cy, dy, start, easing, offset, f;
                        if (!e) y = 0;
                        else {
                            offset = (e.dataset.scrollOffset ? parseInt(e.dataset.scrollOffset) : 0) * parseFloat(getComputedStyle(document.documentElement).fontSize);
                            switch (e.dataset.scrollBehavior ? e.dataset.scrollBehavior : "default") {
                                case "default":
                                default:
                                    y = e.offsetTop + offset;
                                    break;
                                case "center":
                                    if (e.offsetHeight < window.innerHeight) y = e.offsetTop - (window.innerHeight - e.offsetHeight) / 2 + offset;
                                    else y = e.offsetTop - offset;
                                    break;
                                case "previous":
                                    if (e.previousElementSibling) y = e.previousElementSibling.offsetTop + e.previousElementSibling.offsetHeight + offset;
                                    else y = e.offsetTop + offset;
                                    break;
                            }
                        }
                        if (!style) style = "smooth";
                        if (!duration) duration = 750;
                        if (style == "instant") {
                            window.scrollTo(0, y);
                            return;
                        }
                        start = Date.now();
                        cy = window.scrollY;
                        dy = y - cy;
                        switch (style) {
                            case "linear":
                                easing = function (t) {
                                    return t;
                                };
                                break;
                            case "smooth":
                                easing = function (t) {
                                    return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
                                };
                                break;
                        }
                        f = function () {
                            var t = Date.now() - start;
                            if (t >= duration) window.scroll(0, y);
                            else {
                                window.scroll(0, cy + dy * easing(t / duration));
                                requestAnimationFrame(f);
                            }
                        };
                        f();
                    },
                    
                   
                    unloadElements = function (parent) {
                        var a, e, x, i;
                        a = parent.querySelectorAll('iframe[data-src=""]');
                        for (i = 0; i < a.length; i++) {
                            if (a[i].dataset.srcUnload === "0") continue;
                            a[i].dataset.src = a[i].src;
                            a[i].src = "";
                        }
                        a = parent.querySelectorAll("video");
                        for (i = 0; i < a.length; i++) {
                            if (!a[i].paused) a[i].pause();
                        }
                        e = $(":focus");
                        if (e) e.blur();
                    };
                
                var getVar = function (name) {
                    var a = window.location.search.substring(1).split("&"),
                        b,
                        k;
                    for (k in a) {
                        b = a[k].split("=");
                        if (b[0] == name) return b[1];
                    }
                    return null;
                };
                var errors = {
                    handle: function (handler) {
                        window.onerror = function (message, url, line, column, error) {
                            handler(error.message);
                            return true;
                        };
                    },
                    unhandle: function () {
                        window.onerror = null;
                    },
                };
                on("load", function () {
                    setTimeout(function () {
                        $body.className = $body.className.replace(/\bis-loading\b/, "is-playing");
                        setTimeout(function () {
                            $body.className = $body.className.replace(/\bis-playing\b/, "is-ready");
                        }, 1000);
                    }, 100);
                });
                loadElements(document.body);
                var style, sheet, rule;
                style = document.createElement("style");
                style.appendChild(document.createTextNode(""));
                document.head.appendChild(style);
                sheet = style.sheet;
                if (client.mobile) {
                    (function () {
                        if (client.flags.lsdUnits) {
                            document.documentElement.style.setProperty("--viewport-height", "100dvh");
                            document.documentElement.style.setProperty("--background-height", "100lvh");
                        } else {
                            var f = function () {
                                document.documentElement.style.setProperty("--viewport-height", window.innerHeight + "px");
                                document.documentElement.style.setProperty("--background-height", window.innerHeight + 250 + "px");
                            };
                            on("load", f);
                            on("resize", f);
                            on("orientationchange", function () {
                                setTimeout(function () {
                                    f();
                                }, 100);
                            });
                        }
                    })();
                }
                if (client.os == "android") {
                    (function () {
                        sheet.insertRule("body::after { }", 0);
                        rule = sheet.cssRules[0];
                        var f = function () {
                            rule.style.cssText = "height: " + Math.max(screen.width, screen.height) + "px";
                        };
                        on("load", f);
                        on("orientationchange", f);
                        on("touchmove", f);
                    })();
                    $body.classList.add("is-touch");
                } else if (client.os == "ios") {
                    if (client.osVersion <= 11)
                        (function () {
                            sheet.insertRule("body::after { }", 0);
                            rule = sheet.cssRules[0];
                            rule.style.cssText = "-webkit-transform: scale(1.0)";
                        })();
                    if (client.osVersion <= 11)
                        (function () {
                            sheet.insertRule("body.ios-focus-fix::before { }", 0);
                            rule = sheet.cssRules[0];
                            rule.style.cssText = "height: calc(100% + 60px)";
                            on(
                                "focus",
                                function (event) {
                                    $body.classList.add("ios-focus-fix");
                                },
                                true
                            );
                            on(
                                "blur",
                                function (event) {
                                    $body.classList.remove("ios-focus-fix");
                                },
                                true
                            );
                        })();
                    $body.classList.add("is-touch");
                }
               
                scrollEvents.init();
                var onvisible = {
                    effects: {
                        "blur-in": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "filter " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity) {
                                this.style.opacity = 0;
                                this.style.filter = "blur(" + 0.25 * intensity + "rem)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.filter = "none";
                            },
                        },
                        "zoom-in": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity, alt) {
                                this.style.opacity = 0;
                                this.style.transform = "scale(" + (1 - (alt ? 0.25 : 0.05) * intensity) + ")";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "zoom-out": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity, alt) {
                                this.style.opacity = 0;
                                this.style.transform = "scale(" + (1 + (alt ? 0.25 : 0.05) * intensity) + ")";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "slide-left": {
                            transition: function (speed, delay) {
                                return "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function () {
                                this.style.transform = "translateX(100vw)";
                            },
                            play: function () {
                                this.style.transform = "none";
                            },
                        },
                        "slide-right": {
                            transition: function (speed, delay) {
                                return "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function () {
                                this.style.transform = "translateX(-100vw)";
                            },
                            play: function () {
                                this.style.transform = "none";
                            },
                        },
                        "flip-forward": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity, alt) {
                                this.style.opacity = 0;
                                this.style.transformOrigin = "50% 50%";
                                this.style.transform = "perspective(1000px) rotateX(" + (alt ? 45 : 15) * intensity + "deg)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "flip-backward": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity, alt) {
                                this.style.opacity = 0;
                                this.style.transformOrigin = "50% 50%";
                                this.style.transform = "perspective(1000px) rotateX(" + (alt ? -45 : -15) * intensity + "deg)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "flip-left": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity, alt) {
                                this.style.opacity = 0;
                                this.style.transformOrigin = "50% 50%";
                                this.style.transform = "perspective(1000px) rotateY(" + (alt ? 45 : 15) * intensity + "deg)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "flip-right": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity, alt) {
                                this.style.opacity = 0;
                                this.style.transformOrigin = "50% 50%";
                                this.style.transform = "perspective(1000px) rotateY(" + (alt ? -45 : -15) * intensity + "deg)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "tilt-left": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity, alt) {
                                this.style.opacity = 0;
                                this.style.transform = "rotate(" + (alt ? 45 : 5) * intensity + "deg)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "tilt-right": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity, alt) {
                                this.style.opacity = 0;
                                this.style.transform = "rotate(" + (alt ? -45 : -5) * intensity + "deg)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "fade-right": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity) {
                                this.style.opacity = 0;
                                this.style.transform = "translateX(" + -1.5 * intensity + "rem)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "fade-left": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity) {
                                this.style.opacity = 0;
                                this.style.transform = "translateX(" + 1.5 * intensity + "rem)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "fade-down": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity) {
                                this.style.opacity = 0;
                                this.style.transform = "translateY(" + -1.5 * intensity + "rem)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "fade-up": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity) {
                                this.style.opacity = 0;
                                this.style.transform = "translateY(" + 1.5 * intensity + "rem)";
                            },
                            play: function () {
                                this.style.opacity = 1;
                                this.style.transform = "none";
                            },
                        },
                        "fade-in": {
                            transition: function (speed, delay) {
                                return "opacity " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function () {
                                this.style.opacity = 0;
                            },
                            play: function () {
                                this.style.opacity = 1;
                            },
                        },
                        "fade-in-background": {
                            custom: true,
                            transition: function (speed, delay) {
                                this.style.setProperty("--onvisible-speed", speed + "s");
                                if (delay) this.style.setProperty("--onvisible-delay", delay + "s");
                            },
                            rewind: function () {
                                this.style.removeProperty("--onvisible-background-color");
                            },
                            play: function () {
                                this.style.setProperty("--onvisible-background-color", "rgba(0,0,0,0.001)");
                            },
                        },
                        "zoom-in-image": {
                            target: "img",
                            transition: function (speed, delay) {
                                return "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function () {
                                this.style.transform = "scale(1)";
                            },
                            play: function (intensity) {
                                this.style.transform = "scale(" + (1 + 0.1 * intensity) + ")";
                            },
                        },
                        "zoom-out-image": {
                            target: "img",
                            transition: function (speed, delay) {
                                return "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity) {
                                this.style.transform = "scale(" + (1 + 0.1 * intensity) + ")";
                            },
                            play: function () {
                                this.style.transform = "none";
                            },
                        },
                        "focus-image": {
                            target: "img",
                            transition: function (speed, delay) {
                                return "transform " + speed + "s ease" + (delay ? " " + delay + "s" : "") + ", " + "filter " + speed + "s ease" + (delay ? " " + delay + "s" : "");
                            },
                            rewind: function (intensity) {
                                this.style.transform = "scale(" + (1 + 0.05 * intensity) + ")";
                                this.style.filter = "blur(" + 0.25 * intensity + "rem)";
                            },
                            play: function (intensity) {
                                this.style.transform = "none";
                                this.style.filter = "none";
                            },
                        },
                    },
                    add: function (selector, settings) {
                        var style = settings.style in this.effects ? settings.style : "fade",
                            speed = parseInt("speed" in settings ? settings.speed : 1000) / 1000,
                            intensity = (parseInt("intensity" in settings ? settings.intensity : 5) / 10) * 1.75 + 0.25,
                            delay = parseInt("delay" in settings ? settings.delay : 0) / 1000,
                            offset = parseInt("offset" in settings ? settings.offset : 0),
                            mode = parseInt("mode" in settings ? settings.mode : 3),
                            replay = "replay" in settings ? settings.replay : false,
                            stagger = "stagger" in settings ? parseInt(settings.stagger) / 1000 : false,
                            state = "state" in settings ? settings.state : null,
                            effect = this.effects[style];
                        if ("CARRD_DISABLE_ANIMATION" in window) {
                            if (style == "fade-in-background")
                                $$(selector).forEach(function (e) {
                                    e.style.setProperty("--onvisible-background-color", "rgba(0,0,0,0.001)");
                                });
                            return;
                        }
                        $$(selector).forEach(function (e) {
                            var children = stagger !== false ? e.querySelectorAll(":scope > li, :scope ul > li") : null,
                                enter = function (staggerDelay = 0) {
                                    var _this = this,
                                        transitionOrig;
                                    if (effect.target) _this = this.querySelector(effect.target);
                                    if (!effect.custom) {
                                        transitionOrig = _this.style.transition;
                                        _this.style.setProperty("backface-visibility", "hidden");
                                        _this.style.transition = effect.transition(speed, delay + staggerDelay);
                                    } else effect.transition.apply(_this, [speed, delay + staggerDelay]);
                                    effect.play.apply(_this, [intensity, !!children]);
                                    if (!effect.custom)
                                        setTimeout(function () {
                                            _this.style.removeProperty("backface-visibility");
                                            _this.style.transition = transitionOrig;
                                        }, (speed + delay + staggerDelay) * 1000 * 2);
                                },
                                leave = function () {
                                    var _this = this,
                                        transitionOrig;
                                    if (effect.target) _this = this.querySelector(effect.target);
                                    if (!effect.custom) {
                                        transitionOrig = _this.style.transition;
                                        _this.style.setProperty("backface-visibility", "hidden");
                                        _this.style.transition = effect.transition(speed);
                                    } else effect.transition.apply(_this, [speed]);
                                    effect.rewind.apply(_this, [intensity, !!children]);
                                    if (!effect.custom)
                                        setTimeout(function () {
                                            _this.style.removeProperty("backface-visibility");
                                            _this.style.transition = transitionOrig;
                                        }, speed * 1000 * 2);
                                },
                                targetElement,
                                triggerElement;
                            if (effect.target) targetElement = e.querySelector(effect.target);
                            else targetElement = e;
                            if (children)
                                children.forEach(function (targetElement) {
                                    effect.rewind.apply(targetElement, [intensity, true]);
                                });
                            else effect.rewind.apply(targetElement, [intensity]);
                            triggerElement = e;
                            if (e.parentNode) {
                                if (e.parentNode.dataset.onvisibleTrigger) triggerElement = e.parentNode;
                                else if (e.parentNode.parentNode) {
                                    if (e.parentNode.parentNode.dataset.onvisibleTrigger) triggerElement = e.parentNode.parentNode;
                                }
                            }
                            scrollEvents.add({
                                element: e,
                                triggerElement: triggerElement,
                                offset: offset,
                                mode: mode,
                                initialState: state,
                                enter: children
                                    ? function () {
                                          var staggerDelay = 0;
                                          children.forEach(function (e) {
                                              enter.apply(e, [staggerDelay]);
                                              staggerDelay += stagger;
                                          });
                                      }
                                    : enter,
                                leave: replay
                                    ? children
                                        ? function () {
                                              children.forEach(function (e) {
                                                  leave.apply(e);
                                              });
                                          }
                                        : leave
                                    : null,
                            });
                        });
                    },
                };
                onvisible.add("#image01", { style: "fade-in", speed: 1000, intensity: 5, delay: 0, replay: false });
                onvisible.add("#text03", { style: "fade-up", speed: 1000, intensity: 1, delay: 0, replay: false });
                onvisible.add("#divider01", { style: "fade-in", speed: 500, intensity: 10, delay: 0, replay: false });
                onvisible.add("#text02", { style: "fade-left", speed: 750, intensity: 2, delay: 0, replay: false });
                onvisible.add("#text10", { style: "fade-right", speed: 1000, intensity: 0, delay: 0, replay: false });
                onvisible.add("#buttons01", { style: "fade-up", speed: 1000, intensity: 1, delay: 0, replay: false });
                onvisible.add("#icons01", { style: "fade-up", speed: 500, intensity: 2, delay: 0, stagger: 125, replay: false });
            })();
        </script>

<?php
include ("footer.php");
?>
    </body>
    
</html>
