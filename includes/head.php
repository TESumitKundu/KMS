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
          @apply py-10 lg:py-20 overflow-clip;
        }
      }

      @layer components {
        .site-container {
          @apply w-full mx-auto max-w-[min(1400px,calc(100%_-_2rem))] md:px-4 space-y-8 lg:space-y-16;
        }

        .standard-typography {
          @apply space-y-4 lg:space-y-6;
        }

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

        .standard-typography p{
          @apply text-balance text-base leading-[1.75];
        }

        .ul-check li {
          background-image: url("assets/img/icons/simple-line-icons_check.svg");
          background-repeat: no-repeat;
          background-size: 0.85lh;
          padding-left: 2em;
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
          @apply aspect-[334/184] relative;
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

        .common-stats-grid {
          @apply grid gap-px overflow-hidden rounded-2xl shadow-[0_22px_60px_rgba(84,32,111,.12)] sm:grid-cols-2 lg:grid-cols-6;
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
          @apply  text-pink-100;
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
          @apply lg:mx-auto size-[120px] bg-white rounded-full;
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
          @apply size-30 lg:size-40 bg-pink-50 rounded-full mx-auto;
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
