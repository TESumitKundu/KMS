<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kolkata Menopause Society</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        /* Neutral */
        --color-white-100: #ffffff;
        --color-black-100: #000000;
        --color-black-200: #1c1c1c;
        --color-black-300: #1d1d1d;
        --color-gray-50: #eee9f1;
        --color-gray-75: #e6e6e6;
        --color-gray-80: #d0d0d0;
        --color-gray-90: #dadada;
        --color-gray-100: #4a4a4a;
        --color-gray-150: #b4b4b4;
        --color-gray-200: #373737;
        --color-gray-300: #303030;
        --color-ink-100: #443649;
        --color-muted-100: #7f7284;
        --color-line-100: #eaddec;

        /* Purple / Plum */
        --color-lilac-50: #f1dcfb;
        --color-purple-50: #f9eeff;
        --color-purple-60: #f6eaff;
        --color-purple-75: #f5e6ff;
        --color-purple-100: #552677;
        --color-purple-900: #1d0430;
        --color-purple-950: #0f001a;
        --color-plum-100: #54206f;
        --color-plum-950: #260036;

        /* Pink / Magenta */
        --color-pink-50: #f7d8ee;
        --color-pink-60: #fbeafa;
        --color-pink-75: #fff8ff;
        --color-pink-100: #ac2b76;
        --color-pink-200: #ab2874;
        --color-magenta-100: #b72d88;
        --color-rose-100: #ec5b8f;

        --font-sans: "Poppins", sans-serif;
      }

      @layer base {
        * {
          box-sizing: border-box;
        }
        html {
          scroll-behavior: smooth;
        }
        body {
          @apply m-0 bg-white-100 text-gray-100 text-sm leading-[1.65] text-pretty;
        }
        a {
          @apply text-inherit no-underline;
        }
        button {
          @apply cursor-pointer border-0 font-[inherit];
        }
        img {
          @apply block max-w-full;
        }

        section {
          @apply pb-5 lg:pb-20 overflow-clip;
        }

        .site__inner-hero,
        .site__home-hero,
        section[class*="bg-"],
        section[class*="bg-"] + section:not([class*="bg-"]),
        .site__inner-hero + section:not([class*="bg-"]),
        .site__inner-hero-2 + section:not([class*="bg-"]) {
          @apply pt-5 lg:pt-20;
        }
      }

      @layer components {
        .site-container {
          @apply w-full mx-auto max-w-[min(1400px,calc(100%_-_2rem))] md:px-4 space-y-8 lg:space-y-16;
        }

        .standard-typography {
          @apply space-y-4 lg:space-y-6;
        }

        .standard-typography p b,
        .standard-typography h1 b,
        .standard-typography h2 b,
        .standard-typography h3 b,
        .standard-typography h4 b,
        .standard-typography h5 b,
        .standard-typography h6 b {
          @apply text-pink-100 font-semibold;
        }

        .standard-typography h1 {
          @apply text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-semibold text-balance text-purple-100;
        }

        .standard-typography h2 {
          @apply text-2xl md:text-4xl xl:text-5xl font-semibold text-gray-200;
        }

        .standard-typography h3 {
          @apply text-xl md:text-2xl lg:text-3xl font-semibold text-gray-200;
        }

        .standard-typography h4 {
          @apply text-lg md:text-3xl lg:text-4xl font-semibold text-gray-200;
        }

        .standard-typography h5 {
          @apply lg:text-xl;
        }

        .standard-typography p {
          @apply text-balance text-base leading-[1.75];
        }

        .ul-check li {
          margin-block: 0.65rem;
          display: grid;
          grid-template-columns: auto 1fr;
          gap: 0.85em;
        }

        .ul-check li::before {
          content: "";
          display: inline-block;
          mask-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzExN18xNzg4KSI+CjxwYXRoIGQ9Ik0xMiAwQzUuMzcyNjIgMCAwIDUuMzcyNjIgMCAxMkMwIDE4LjYyNzggNS4zNzI2MiAyNCAxMiAyNEMxOC42Mjc4IDI0IDI0IDE4LjYyNzggMjQgMTJDMjQgNS4zNzI2MiAxOC42Mjc4IDAgMTIgMFpNMTIgMjIuNTIzNkM2LjIxMDM3IDIyLjUyMzYgMS41IDE3Ljc4OTYgMS41IDEyQzEuNSA2LjIxMDMzIDYuMjEwMzcgMS40OTk5NSAxMiAxLjQ5OTk1QzE3Ljc4OTYgMS40OTk5NSAyMi41IDYuMjEwMzUgMjIuNSAxMkMyMi41IDE3Ljc4OTYgMTcuNzg5NiAyMi41MjM2IDEyIDIyLjUyMzZaTTE2Ljc4OTEgNy42MDkxM0w5Ljc0ODQ4IDE0LjY5NEw2LjU3Nzg1IDExLjUyMzRDNi4yODQ5OCAxMS4yMzA1IDUuODEwMjMgMTEuMjMwNSA1LjUxNjk4IDExLjUyMzRDNS4yMjQxIDExLjgxNjIgNS4yMjQxIDEyLjI5MSA1LjUxNjk4IDEyLjU4MzlMOS4yMjkxIDE2LjI5NjRDOS41MjE5OCAxNi41ODg5IDkuOTk2NzMgMTYuNTg4OSAxMC4yOSAxNi4yOTY0QzEwLjMyMzcgMTYuMjYyNiAxMC4zNTI2IDE2LjIyNTkgMTAuMzc4OSAxNi4xODc2TDE3Ljg1MDQgOC42Njk5OEMxOC4xNDI5IDguMzc3MSAxOC4xNDI5IDcuOTAyMzUgMTcuODUwNCA3LjYwOTEzQzE3LjU1NzEgNy4zMTYyNSAxNy4wODI0IDcuMzE2MjUgMTYuNzg5MSA3LjYwOTEzWiIgZmlsbD0id2hpdGUiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMF8xMTdfMTc4OCI+CjxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K");
          mask-size: 1.35em;
          mask-repeat: no-repeat;
          mask-position: center;
          height: 1lh;
          aspect-ratio: 1;
          background-color: currentColor;
          vertical-align: middle;
        }

        .cta {
          @apply px-4 py-2 inline-flex items-center justify-center gap-2 rounded-lg border font-medium text-sm transition duration-200 ease-in-out;
        }

        .cta.lg {
          @apply xl:px-6 xl:py-2.5 xl:text-lg;
        }

        .cta:hover {
          @apply -translate-y-0.5 shadow-[0_16px_26px_rgba(84,32,111,.24)];
        }

        .cta-ghost {
          @apply inline-flex items-center justify-center gap-2 font-semibold;
        }

        .bg-hero-gradient {
          background: linear-gradient(180deg, #fbeafa 56.98%, #ffffff 100%);
        }

        .bg-gradient-2 {
          background: linear-gradient(104.04deg, #fef3fb 0%, #fbeafa 100%);
        }

        .bg-gradient-3 {
          background: linear-gradient(104.04deg, #eed5ff 0%, #fbeafa 100%);
        }

        .bg-gradient-4 {
          background: linear-gradient(180deg, #fbeafa 56.98%, #e9caff 100%);
        }

        .bg-gradient-5 {
          background: linear-gradient(104.04deg, #eed5ff 0%, #fbeafa 100%);
        }

        footer h6 {
          @apply text-lg font-semibold;
        }

        footer a:hover {
          @apply text-pink-100;
        }

        .site__home-hero article h1 {
          @apply text-purple-100 text-[clamp(2rem,3.43vw,3rem)] font-light leading-[1.1];
        }

        .site__home-hero article h1 strong,
        .site__home-hero article h1 b {
          @apply font-semibold text-[clamp(2.5rem,6.86vw,6rem)] block;
        }

        .site__home-hero article h1 b {
          @apply text-pink-200;
        }

        .site__home-hero article h4 {
          @apply text-purple-100 text-[clamp(1.35rem,2.14vw,1.875rem)] leading-[1.35];
        }

        .site__inner-hero {
          @apply relative isolate text-purple-100;
          background: linear-gradient(180deg, #fbeafa 56.98%, #e9caff 100%);
        }

        .site__inner-hero figure {
          @apply absolute inset-0 m-auto flex items-center justify-center z-[-1];
        }

        .site__inner-hero figure img {
          @apply block mx-auto;
        }

        .stat-card {
          @apply flex flex-col lg:flex-row lg:items-center gap-4 rounded-lg bg-white p-4 md:p-6 shadow-[0_18px_50px_rgba(69,23,88,.12)] lg:text-base;
        }

        .stat-card .icon {
          @apply shrink-0;
        }

        .stat-card .icon img {
          @apply block;
        }

        .stat-card strong {
          @apply block text-pink-100 font-medium text-xl md:text-4xl;
        }

        .mission-box {
          @apply rounded-lg border border-white-100/28 bg-white-100/4 p-6 lg:p-8 space-y-6;
        }

        .mission-box h3 {
          @apply text-2xl lg:text-3xl font-semibold;
        }

        .event-card {
          @apply overflow-clip rounded-2xl bg-white;
        }

        .event-img {
          @apply aspect-[334/184] relative !mb-0;
        }

        .event-img img {
          @apply block;
        }

        .event-date-badge {
          @apply absolute top-0 right-4 text-white bg-pink-100 lg:px-5 px-3 py-2 text-lg lg:text-2xl text-center rounded-b-lg font-semibold;
        }

        .event-body {
          @apply p-5 space-y-3;
        }

        .event-body h6 {
          @apply text-black text-lg font-semibold;
        }

        .event-card .meta {
          @apply flex flex-wrap gap-3 items-center justify-between border-0 border-b border-black/20 pb-2;
        }

        .event-card .meta > div {
          @apply flex items-center gap-2;
        }

        .event-card .meta svg {
          @apply size-4 text-pink-100;
        }

        .site__inner-hero-2 {
          @apply pt-0;
          background: linear-gradient(180deg, #fbeafa 56.98%, #ffffff 100%);
        }

        .site__inner-hero-2 .site-container {
          @apply space-y-0;
        }

        .site__inner-hero-2 article {
          @apply relative isolate py-10 lg:py-20;
        }

        .site__inner-hero-2 article::before {
          content: "";
          @apply absolute inset-0 w-full aspect-square rounded-full blur-[20px] bg-white/50 mx-auto mb-0 -translate-y-1/3 z-[-1];
        }

        .common-stats-grid {
          @apply grid gap-px overflow-hidden rounded-2xl shadow-[0_22px_60px_rgba(84,32,111,.12)] grid-cols-2 md:grid-cols-3 lg:lg:grid-cols-[auto] lg:grid-flow-col;
        }

        .stat-card-sm {
          @apply flex items-center gap-4 bg-white px-6 py-5;
        }

        .stat-card-sm img {
          @apply size-9 object-contain;
        }

        .stat-card-sm strong {
          @apply block text-2xl font-semibold leading-none text-pink-100;
        }

        .stat-card-sm span {
          @apply block text-xs font-medium leading-tight text-purple-950;
        }

        .events-tabs {
          @apply flex flex-wrap gap-6;
        }

        .events-tab {
          @apply text-pink-100;
        }

        .events-tab.is-active {
          @apply bg-pink-100 text-white;
        }

        .events-card-grid {
          @apply grid gap-8 sm:grid-cols-2 xl:grid-cols-4;
        }

        .webinar-card {
          @apply overflow-hidden rounded-xl border border-slate-100 bg-white shadow-[0_14px_38px_rgba(84,32,111,.08)];
        }

        .webinar-card figure {
          @apply relative aspect-[1.62/1] overflow-hidden;
        }

        .webinar-card figure img {
          @apply h-full w-full object-cover;
        }

        .webinar-badge {
          @apply absolute left-3 top-3 rounded-md bg-pink-100 px-3 py-1 text-xs font-semibold text-white;
        }

        .webinar-body {
          @apply space-y-4 p-5;
        }

        .webinar-meta {
          @apply flex flex-wrap items-center justify-between gap-3 text-xs font-semibold text-purple-950;
        }

        .webinar-meta span {
          @apply inline-flex items-center gap-1.5;
        }

        .webinar-body h6 {
          @apply text-base font-bold leading-snug text-purple-100;
        }

        .webinar-body p {
          @apply font-medium text-purple-950;
        }

        .webinar-details {
          @apply flex flex-wrap items-center justify-between gap-3 border-t border-gray-90 pt-3 text-xs font-semibold text-purple-950;
        }

        .webinar-details span {
          @apply inline-flex items-center gap-1.5;
        }

        .webinar-card .cta {
          @apply w-full border-pink-100 text-pink-100 hover:bg-pink-100 hover:text-white;
        }

        .search-box {
          @apply flex max-w-xl overflow-hidden rounded-lg border border-white bg-white shadow-[0_14px_34px_rgba(84,32,111,.08)];
        }

        .search-box input {
          @apply min-h-14 flex-1 px-5 text-base text-purple-950 outline-none placeholder:text-gray-150;
        }

        .search-box button {
          @apply grid min-h-14 w-16 place-items-center bg-pink-100 hover:bg-purple-100 text-2xl text-white transition;
        }

        .publication-categories {
          @apply grid gap-4 lg:gap-6 grid-cols-2 lg:grid-cols-3 xl:grid-cols-6;
        }

        .publication-category {
          @apply rounded-xl border border-pink-50 bg-pink-75 p-6 text-center;
        }

        .publication-category .icon {
          @apply mx-auto mb-4 grid size-20 place-items-center rounded-full bg-white shadow-[0_12px_32px_rgba(84,32,111,.05)];
        }

        .publication-category .icon img {
          @apply size-9 object-contain;
        }

        .publication-category h6 {
          @apply text-base font-semibold text-purple-100;
        }

        .publication-category p {
          @apply mt-4 text-purple-950;
        }

        .member-category-alt .publication-category {
          @apply border-purple-60 bg-purple-60;
        }

        .member-category-alt .publication-category .icon {
          @apply bg-white;
        }

        .membership-options {
          @apply grid gap-6 lg:grid-cols-3;
        }

        .membership-option {
          @apply rounded-2xl border border-gray-90 bg-white p-6 shadow-[0_12px_32px_rgba(84,32,111,.05)];
        }

        .membership-option.is-featured {
          @apply border-pink-100 bg-pink-75;
        }

        .membership-option h6 {
          @apply text-xl font-semibold text-purple-100;
        }

        .membership-option p {
          @apply mt-3 text-sm font-medium leading-6 text-purple-950;
        }

        .membership-option ul {
          @apply mt-5 space-y-3;
        }

        .membership-option li {
          @apply bg-[url('assets/img/icons/simple-line-icons_check.svg')] bg-[length:1rem] bg-[left_.25rem] bg-no-repeat pl-7 text-sm font-medium text-purple-950;
        }

        .member-steps {
          @apply grid gap-6 md:grid-cols-3;
        }

        .member-step {
          @apply rounded-xl border border-gray-90 bg-white p-6 text-center shadow-[0_12px_32px_rgba(84,32,111,.05)];
        }

        .member-step strong {
          @apply mx-auto mb-4 grid size-12 place-items-center rounded-full bg-pink-100 text-xl font-semibold text-white;
        }

        .member-step h6 {
          @apply text-lg font-semibold text-purple-100;
        }

        .member-step p {
          @apply mt-2 text-sm font-medium text-purple-950;
        }

        .member-overview-grid {
          @apply grid gap-8 md:grid-cols-[0.9fr_1.1fr];
        }

        .member-panel {
          @apply rounded-2xl bg-pink-75 p-4 md:p-6 space-y-6;
        }

        .member-panel h4 {
          @apply text-2xl font-semibold text-purple-100;
        }

        .member-type-grid {
          @apply grid gap-4 grid-cols-2 lg:grid-cols-3 xl:grid-cols-4;
        }

        .member-type-card {
          @apply rounded-xl bg-white p-4 text-center;
        }

        .member-type-card .icon {
          @apply mx-auto mb-3 grid size-12 place-items-center rounded-full bg-pink-75;
        }

        .member-type-card img {
          @apply size-7 object-contain;
        }

        .member-type-card h6 {
          @apply text-xs font-semibold text-purple-100;
        }

        .member-benefit-list {
          @apply mt-6 grid gap-4 sm:grid-cols-2;
        }

        .member-benefit-list li {
          @apply flex items-center gap-3 text-sm font-semibold text-purple-950;
        }

        .member-benefit-list li::before {
          content: "";
          @apply grid size-5 shrink-0 place-items-center rounded-full bg-pink-100;
        }

        .member-panel-illustration {
          @apply hidden max-w-xs self-end lg:block;
        }

        .member-journey {
          @apply rounded-2xl border border-pink-50 bg-white p-4;
        }

        .member-journey-grid {
          @apply grid gap-px bg-pink-50 md:grid-cols-3 xl:grid-cols-6;
        }

        .member-journey-step {
          @apply relative bg-white p-4 text-center;
        }

        .member-journey-step strong {
          @apply absolute -top-8 left-1/2 grid size-9 -translate-x-1/2 place-items-center rounded-full bg-pink-100 text-sm font-semibold text-white;
        }

        .member-journey-step .icon {
          @apply mx-auto mt-5 mb-4 grid size-14 place-items-center;
        }

        .member-journey-step img {
          @apply size-10 object-contain;
        }

        .member-journey-step h6 {
          @apply text-sm font-semibold text-purple-100;
        }

        .member-journey-step p {
          @apply mt-2 text-xs font-medium leading-5 text-purple-950;
        }

        .member-network-cta {
          @apply rounded-2xl bg-gradient-to-r from-pink-100 to-purple-100 p-8 text-white lg:p-12;
        }

        .member-network-cta article {
          @apply flex flex-wrap items-center justify-between gap-8;
        }

        .member-network-cta h4 {
          @apply text-3xl font-semibold;
        }

        .member-network-cta p {
          @apply mt-3 max-w-2xl text-base leading-7 text-white/85;
        }

        .member-network-actions {
          @apply flex flex-wrap gap-4;
        }

        .community-category-row {
          @apply grid gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-10;
        }

        .community-category {
          @apply rounded-xl bg-pink-75 p-4 text-center;
        }

        .community-category img {
          @apply mx-auto mb-3 size-8 object-contain;
        }

        .community-category h6 {
          @apply text-xs font-semibold text-purple-100;
        }

        .community-tags {
          @apply flex flex-wrap gap-3;
        }

        .community-tags > * {
          @apply rounded-md bg-white px-4 py-2  font-semibold text-purple-100 shadow-[0_14px_38px_rgba(84,32,111,.08)] hover:bg-purple-200 transition;
        }

        .community-network figure {
          @apply mt-6 md:mt-0;
        }

        .community-engagement {
          @apply grid gap-4 grid-cols-3 sm:grid-cols-4 lg:grid-cols-8;
        }

        .community-engagement-card {
          @apply rounded-xl bg-pink-75 p-5 text-center;
        }

        .community-engagement-card img {
          @apply mx-auto mb-3 size-9 object-contain;
        }

        .community-engagement-card h6 {
          @apply text-sm font-semibold text-purple-100;
        }

        .community-member-grid {
          @apply grid gap-6 sm:grid-cols-2 lg:grid-cols-4;
        }

        .community-member-card {
          @apply rounded-xl border border-gray-90 bg-white p-5 text-center shadow-[0_12px_32px_rgba(84,32,111,.05)];
        }

        .community-member-card figure {
          @apply mx-auto mb-4 size-20 overflow-hidden rounded-full bg-pink-75;
        }

        .community-member-card img {
          @apply h-full w-full object-cover;
        }

        .community-member-card h6 {
          @apply text-base font-semibold text-purple-100;
        }

        .community-member-card p {
          @apply mt-1 text-xs font-medium text-purple-950;
        }

        .community-member-stats {
          @apply mt-5 grid grid-cols-2 gap-px bg-gray-90;
        }

        .community-member-stats div {
          @apply bg-white p-3;
        }

        .community-member-stats strong {
          @apply block text-lg font-semibold text-purple-100;
        }

        .community-info-card {
          @apply rounded-2xl bg-pink-75 p-6 space-y-6;
        }

        .community-info-card h4 {
          @apply text-xl font-semibold text-purple-100;
        }

        .community-faq details div {
          @apply text-xs pt-3;
        }

        .community-faq summary {
          @apply flex items-center justify-between border-b border-pink-50 pb-3 font-medium cursor-pointer;
        }

        .community-faq summary svg {
          @apply size-4 shrink-0 transition-transform duration-300 opacity-50;
        }

        .community-faq details[open] summary svg{
          @apply rotate-180;
        }


        .section-head {
          @apply flex items-center justify-between gap-4 mb-6;
        }

        .section-head h3 {
          @apply text-2xl font-semibold text-purple-100;
        }

        .section-head .cta {
          @apply shrink-0 text-sm font-semibold text-pink-100;
        }

        .publication-card-grid {
          @apply grid gap-6 sm:grid-cols-2 xl:grid-cols-4;
        }

        .publication-card {
          @apply overflow-hidden rounded-xl bg-white shadow-[0_14px_38px_rgba(84,32,111,.08)];
        }

        .publication-card figure {
          @apply aspect-[1.62/1] overflow-hidden;
        }

        .publication-card figure img {
          @apply h-full w-full object-cover;
        }

        .publication-card-body {
          @apply space-y-3 p-5;
        }

        .publication-badge {
          @apply inline-flex rounded bg-pink-75 px-3 py-1 text-xs font-semibold text-pink-100;
        }

        .publication-card h6 {
          @apply text-base font-bold leading-snug text-purple-100;
        }

        .publication-card p {
          @apply text-sm font-medium text-purple-950;
        }

        .publication-card-meta-grid {
          @apply flex flex-wrap items-center justify-between gap-4;
        }

        .publication-card-meta {
          @apply flex items-center gap-2  text-xs font-medium text-purple-950;
        }

        .publication-card-meta svg {
          @apply size-4 opacity-50;
        }

        .publication-list {
          @apply overflow-hidden rounded-xl border border-[#ececec] bg-white;
        }

        .publication-list-item {
          @apply grid gap-4 border-b border-[#ececec] p-5 last:border-b-0 md:grid-cols-[1fr_0.25fr_auto] md:items-center;
        }

        .publication-list-title {
          @apply flex gap-4;
        }

        .publication-list-title .icon {
          @apply grid size-15 shrink-0 place-items-center rounded-lg bg-pink-75 text-pink-200;
        }

        .publication-list-title .icon img {
          @apply size-6 object-contain;
        }

        .publication-list-title h6 {
          @apply text-base font-semibold text-purple-100;
        }

        .publication-list-title p,
        .publication-list-item span {
          @apply text-sm font-medium text-purple-950;
        }

        .publication-panels {
          @apply grid gap-8 lg:grid-cols-2;
        }

        .publication-panel {
          @apply lg:rounded-2xl lg:bg-pink-75 lg:p-6;
        }

        .journal-grid,
        .guideline-grid {
          @apply grid gap-4 grid-cols-2 md:grid-cols-3;
        }

        .guideline-card,
        .journal-card {
          @apply flex flex-wrap gap-4 rounded-xl p-4 lg:p-5 border border-pink-50;
        }

        .guideline-card article,
        .journal-card article {
          @apply flex-1 flex flex-col gap-3;
        }

        .journal-card {
          @apply bg-pink-75;
        }

        .guideline-card {
          @apply bg-white;
        }

        .journal-card figure {
          @apply mb-2 aspect-[3/4] max-w-40;
        }

        .journal-card figure img,
        .guideline-card img {
          @apply h-full w-full object-cover;
        }

        .journal-card h6,
        .guideline-card h6 {
          @apply font-medium text-purple-100;
        }

        .journal-card p,
        .guideline-card p {
          @apply text-xs;
        }

        .journal-card .cta,
        .guideline-card .cta {
          @apply w-full mt-auto border-purple-100 text-purple-100 hover:bg-purple-100 hover:text-white;
        }

        .guideline-card img {
          @apply mx-auto  size-16 object-contain;
        }

        .publication-subscribe {
          @apply rounded-2xl bg-gradient-to-r from-pink-100 to-purple-100 overflow-clip rounded-xl text-white flex gap-4 lg:items-center;
        }

        .publication-subscribe article {
          @apply flex-1 p-6 flex justify-between items-center gap-6 flex-wrap;
        }

        .publication-subscribe figure {
          @apply hidden w-40 lg:block;
        }

        .publication-subscribe h5 {
          @apply text-2xl font-semibold;
        }

        .publication-subscribe form {
          @apply flex overflow-hidden rounded-lg bg-white flex-1 max-w-md;
        }

        .publication-subscribe input {
          @apply min-h-14 flex-1 px-5 text-purple-950 outline-none;
        }

        .publication-subscribe button {
          @apply bg-pink-100 px-8 font-semibold text-white;
        }

        .academic-resources {
          @apply grid grid-cols-2 gap-x-5 gap-y-8 sm:grid-cols-3 lg:grid-cols-6 lg:gap-x-0;
        }

        .academic-card {
          @apply relative flex flex-col items-center text-center  font-medium leading-tight text-gray-100;
        }

        .academic-icon {
          @apply relative z-[1] grid size-16 place-items-center rounded-md border border-pink-100/70 bg-white p-3;
        }

        .academic-icon img {
          @apply block mx-auto;
        }

        .academic-title {
          @apply mt-4;
        }

        .academic-title.narrow {
          @apply max-w-[120px];
        }

        .academic-line {
          @apply absolute top-8 left-[calc(50%+2rem)] hidden w-[calc(100%_-_4rem)] border-t border-pink-100/45 lg:block;
        }

        .academic-dot {
          @apply absolute top-[29px] right-[-5px] z-[2] hidden size-3 rounded-full bg-pink-100 lg:block;
        }

        .site__about-intro .stat-card {
          @apply lg:absolute right-4 bg-pink-75 py-4;
        }

        .site__about-intro .stat-card:first-of-type {
          @apply top-8;
        }

        .site__about-intro .stat-card:last-of-type {
          @apply bottom-8;
        }

        .about-grid {
          @apply grid sm:grid-cols-2 lg:grid-cols-3 gap-px bg-gray-80 -mx-8 -my-8 sm:-my-0;
        }

        .about-feature-grid {
          @apply grid gap-px md:grid-cols-2 lg:grid-cols-3;
        }

        .about-feature-card {
          @apply bg-white p-8 space-y-4;
        }

        .about-feature-card h5 {
          @apply text-lg md:text-xl lg:text-2xl font-semibold text-gray-200;
        }

        .about-feature-card figure {
          @apply size-16 lg:size-20;
        }

        .speaker-photo {
          @apply lg:!mx-auto size-[120px] bg-white rounded-full;
        }

        .winner-card {
          @apply bg-purple-100 text-white px-6 py-4 rounded-md flex gap-4 items-center justify-between;
        }

        .winner-card > div {
          @apply flex-1;
        }

        .winner-card h6 {
          @apply text-lg font-semibold;
        }

        .winner-avatar {
          @apply size-10 rounded-full bg-white;
        }

        .committee-grid {
          @apply grid gap-6 sm:grid-cols-2 lg:grid-cols-4;
        }

        .committee-group-card {
          @apply rounded-2xl bg-white border border-gray-90 p-4 space-y-4;
        }

        .committee-group-card h5 {
          @apply text-lg font-semibold text-gray-200;
        }

        .committee-card {
          @apply text-center rounded-2xl bg-white overflow-clip p-8 space-y-4 backdrop-blur-[2px];
        }

        .committee-card figure {
          @apply size-30 lg:size-40 bg-pink-50 rounded-full !mx-auto;
        }

        .committee-card img {
          @apply h-full w-full object-cover;
        }

        .committee-card h6 {
          @apply text-xl font-semibold text-gray-200;
        }
      }
    </style>
  </head>
</html>
