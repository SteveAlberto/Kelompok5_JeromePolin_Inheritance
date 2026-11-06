@extends('layout.layouts')
@section('title', 'Blog')
@section('partial.header')
@section('content')

<h1>Blog</h1>
<p>Welcome to the blog section!</p>

<section aria-labelledby="cards-docs-title" class="mt-6 px-4 md:px-8">
    <div class="mx-auto max-w-7xl">
        <h2 id="cards-docs-title" class="sr-only">Lumora API documentation</h2>
        <ul class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <li class="@container">
                <article
                    class="group relative flex h-full flex-col rounded-xl bg-white p-5 shadow-xs ring-1 ring-neutral-950/10 transition duration-200 ease-out hover:shadow-md hover:ring-neutral-950/20 has-[a:focus-visible]:outline-2 has-[a:focus-visible]:outline-offset-2 has-[a:focus-visible]:outline-zinc-950 motion-safe:hover:-translate-y-0.5 motion-reduce:transition-none @sm:p-6 @md:flex-row @md:gap-4 dark:bg-neutral-900 dark:ring-neutral-800 dark:hover:ring-neutral-700 dark:has-[a:focus-visible]:outline-zinc-50">
                    <span
                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-neutral-100 text-neutral-950 dark:bg-neutral-800 dark:text-neutral-50"><svg
                            class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
                            <path
                                d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09" />
                            <path
                                d="M9 12a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.4 22.4 0 0 1-4 2z" />
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 .05 5 .05" /></svg></span>
                    <div class="mt-5 flex min-w-0 flex-1 flex-col @md:mt-0">
                        <h3 class="pr-7 text-base font-semibold text-neutral-950 dark:text-neutral-50"><a href="#"
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">Quickstart</a></h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">Install the SDK, create an API
                            key and send your first event in five minutes.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">Guide · 5 min
                        </p>
                    </div>
                    <svg class="absolute top-5 right-5 size-4 shrink-0 text-neutral-400 transition duration-200 group-hover:translate-x-0.5 group-hover:text-neutral-950 motion-reduce:transition-none @sm:top-6 @sm:right-6 dark:text-neutral-600 dark:group-hover:text-neutral-50"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" /></svg>
                </article>
            </li>
            <li class="@container">
                <article
                    class="group relative flex h-full flex-col rounded-xl bg-white p-5 shadow-xs ring-1 ring-neutral-950/10 transition duration-200 ease-out hover:shadow-md hover:ring-neutral-950/20 has-[a:focus-visible]:outline-2 has-[a:focus-visible]:outline-offset-2 has-[a:focus-visible]:outline-zinc-950 motion-safe:hover:-translate-y-0.5 motion-reduce:transition-none @sm:p-6 @md:flex-row @md:gap-4 dark:bg-neutral-900 dark:ring-neutral-800 dark:hover:ring-neutral-700 dark:has-[a:focus-visible]:outline-zinc-50">
                    <span
                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-neutral-100 text-neutral-950 dark:bg-neutral-800 dark:text-neutral-50"><svg
                            class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z" />
                            <circle cx="16.5" cy="7.5" r=".5" fill="currentColor" /></svg></span>
                    <div class="mt-5 flex min-w-0 flex-1 flex-col @md:mt-0">
                        <h3 class="pr-7 text-base font-semibold text-neutral-950 dark:text-neutral-50"><a href="#"
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">Authentication</a>
                        </h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">API keys, OAuth for apps that
                            act for your users, and how to rotate both safely.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">Guide · 8 min
                        </p>
                    </div>
                    <svg class="absolute top-5 right-5 size-4 shrink-0 text-neutral-400 transition duration-200 group-hover:translate-x-0.5 group-hover:text-neutral-950 motion-reduce:transition-none @sm:top-6 @sm:right-6 dark:text-neutral-600 dark:group-hover:text-neutral-50"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" /></svg>
                </article>
            </li>
            <li class="@container">
                <article
                    class="group relative flex h-full flex-col rounded-xl bg-white p-5 shadow-xs ring-1 ring-neutral-950/10 transition duration-200 ease-out hover:shadow-md hover:ring-neutral-950/20 has-[a:focus-visible]:outline-2 has-[a:focus-visible]:outline-offset-2 has-[a:focus-visible]:outline-zinc-950 motion-safe:hover:-translate-y-0.5 motion-reduce:transition-none @sm:p-6 @md:flex-row @md:gap-4 dark:bg-neutral-900 dark:ring-neutral-800 dark:hover:ring-neutral-700 dark:has-[a:focus-visible]:outline-zinc-50">
                    <span
                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-neutral-100 text-neutral-950 dark:bg-neutral-800 dark:text-neutral-50"><svg
                            class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M18 16.98h-5.99c-1.1 0-1.95.94-2.48 1.9A4 4 0 0 1 2 17c.01-.7.2-1.4.57-2" />
                            <path d="m6 17 3.13-5.78c.53-.97.1-2.18-.5-3.1a4 4 0 1 1 6.89-4.06" />
                            <path d="m12 6 3.13 5.73C15.66 12.7 16.9 13 18 13a4 4 0 0 1 0 8" /></svg></span>
                    <div class="mt-5 flex min-w-0 flex-1 flex-col @md:mt-0">
                        <h3 class="pr-7 text-base font-semibold text-neutral-950 dark:text-neutral-50"><a href="#"
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">Webhooks</a></h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">A signed request when something
                            happens, with retries and a 30-day replay log.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">Reference · 14
                            events</p>
                    </div>
                    <svg class="absolute top-5 right-5 size-4 shrink-0 text-neutral-400 transition duration-200 group-hover:translate-x-0.5 group-hover:text-neutral-950 motion-reduce:transition-none @sm:top-6 @sm:right-6 dark:text-neutral-600 dark:group-hover:text-neutral-50"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" /></svg>
                </article>
            </li>
            <li class="@container">
                <article
                    class="group relative flex h-full flex-col rounded-xl bg-white p-5 shadow-xs ring-1 ring-neutral-950/10 transition duration-200 ease-out hover:shadow-md hover:ring-neutral-950/20 has-[a:focus-visible]:outline-2 has-[a:focus-visible]:outline-offset-2 has-[a:focus-visible]:outline-zinc-950 motion-safe:hover:-translate-y-0.5 motion-reduce:transition-none @sm:p-6 @md:flex-row @md:gap-4 dark:bg-neutral-900 dark:ring-neutral-800 dark:hover:ring-neutral-700 dark:has-[a:focus-visible]:outline-zinc-50">
                    <span
                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-neutral-100 text-neutral-950 dark:bg-neutral-800 dark:text-neutral-50"><svg
                            class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M8 3H7a2 2 0 0 0-2 2v5a2 2 0 0 1-2 2 2 2 0 0 1 2 2v5c0 1.1.9 2 2 2h1" />
                            <path d="M16 21h1a2 2 0 0 0 2-2v-5c0-1.1.9-2 2-2a2 2 0 0 1-2-2V5a2 2 0 0 0-2-2h-1" />
                            </svg></span>
                    <div class="mt-5 flex min-w-0 flex-1 flex-col @md:mt-0">
                        <h3 class="pr-7 text-base font-semibold text-neutral-950 dark:text-neutral-50"><a href="#"
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">API reference</a></h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">Every endpoint with its
                            parameters, responses and errors, in curl, Node and Python.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">Reference · 62
                            endpoints</p>
                    </div>
                    <svg class="absolute top-5 right-5 size-4 shrink-0 text-neutral-400 transition duration-200 group-hover:translate-x-0.5 group-hover:text-neutral-950 motion-reduce:transition-none @sm:top-6 @sm:right-6 dark:text-neutral-600 dark:group-hover:text-neutral-50"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" /></svg>
                </article>
            </li>
            <li class="@container">
                <article
                    class="group relative flex h-full flex-col rounded-xl bg-white p-5 shadow-xs ring-1 ring-neutral-950/10 transition duration-200 ease-out hover:shadow-md hover:ring-neutral-950/20 has-[a:focus-visible]:outline-2 has-[a:focus-visible]:outline-offset-2 has-[a:focus-visible]:outline-zinc-950 motion-safe:hover:-translate-y-0.5 motion-reduce:transition-none @sm:p-6 @md:flex-row @md:gap-4 dark:bg-neutral-900 dark:ring-neutral-800 dark:hover:ring-neutral-700 dark:has-[a:focus-visible]:outline-zinc-50">
                    <span
                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-neutral-100 text-neutral-950 dark:bg-neutral-800 dark:text-neutral-50"><svg
                            class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path
                                d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" />
                            <path d="M12 22V12" />
                            <polyline points="3.29 7 12 12 20.71 7" />
                            <path d="m7.5 4.27 9 5.15" /></svg></span>
                    <div class="mt-5 flex min-w-0 flex-1 flex-col @md:mt-0">
                        <h3 class="pr-7 text-base font-semibold text-neutral-950 dark:text-neutral-50"><a href="#"
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">SDKs and libraries</a>
                        </h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">Typed clients for TypeScript,
                            Python, Go and Ruby, versioned with the API.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">4 languages</p>
                    </div>
                    <svg class="absolute top-5 right-5 size-4 shrink-0 text-neutral-400 transition duration-200 group-hover:translate-x-0.5 group-hover:text-neutral-950 motion-reduce:transition-none @sm:top-6 @sm:right-6 dark:text-neutral-600 dark:group-hover:text-neutral-50"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" /></svg>
                </article>
            </li>
            <li class="@container">
                <article
                    class="group relative flex h-full flex-col rounded-xl bg-white p-5 shadow-xs ring-1 ring-neutral-950/10 transition duration-200 ease-out hover:shadow-md hover:ring-neutral-950/20 has-[a:focus-visible]:outline-2 has-[a:focus-visible]:outline-offset-2 has-[a:focus-visible]:outline-zinc-950 motion-safe:hover:-translate-y-0.5 motion-reduce:transition-none @sm:p-6 @md:flex-row @md:gap-4 dark:bg-neutral-900 dark:ring-neutral-800 dark:hover:ring-neutral-700 dark:has-[a:focus-visible]:outline-zinc-50">
                    <span
                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-neutral-100 text-neutral-950 dark:bg-neutral-800 dark:text-neutral-50"><svg
                            class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m12 14 4-4" />
                            <path d="M3.34 19a10 10 0 1 1 17.32 0" /></svg></span>
                    <div class="mt-5 flex min-w-0 flex-1 flex-col @md:mt-0">
                        <h3 class="pr-7 text-base font-semibold text-neutral-950 dark:text-neutral-50"><a href="#"
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">Rate limits</a></h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">The limits on each plan, the
                            headers that report them and how to back off.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">Guide · 4 min
                        </p>
                    </div>
                    <svg class="absolute top-5 right-5 size-4 shrink-0 text-neutral-400 transition duration-200 group-hover:translate-x-0.5 group-hover:text-neutral-950 motion-reduce:transition-none @sm:top-6 @sm:right-6 dark:text-neutral-600 dark:group-hover:text-neutral-50"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" /></svg>
                </article>
            </li>
        </ul>
    </div>
</section>
@section('partial.footer')
@endsection