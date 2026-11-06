@extends('layout.layouts')
@section('title', 'Blog')
@section('partial.header')
@section('content')

<h1>Blog</h1>
<p>Welcome to the blog section!</p>

<section aria-labelledby="cards-docs-title" class="mt-6 px-4 md:px-8">
    <div class="mx-auto max-w-7xl">
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
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">Dari Surabaya ke Waseda</a></h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">Jerome lahir di Jakarta pada 2 Mei 1998 dan besar di Surabaya. Ia bersekolah di Intan
Permata Hati lalu SMA Negeri 5 Surabaya, kemudian kuliah Matematika Terapan di Waseda
University, Jepang, dan lulus pada 2022.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">Pendidikan
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
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
                            <path
                                d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09" />
                            <path
                                d="M9 12a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.4 22.4 0 0 1-4 2z" />
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 .05 5 .05" /></svg></span>
                    <div class="mt-5 flex min-w-0 flex-1 flex-col @md:mt-0">
                        <h3 class="pr-7 text-base font-semibold text-neutral-950 dark:text-neutral-50"><a href="#"
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">Nihongo Mantappu</a></h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">Kanal ini dibuat pada Desember 2017 saat Jerome kuliah di Jepang. Isinya matematika,
bahasa dan budaya Jepang, serta cerita hidupnya. Kanal meraih Silver Play Button (2018),
Gold (2019), dan Diamond (2023), dengan sekitar 10 juta subscriber.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">Konten
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
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
                            <path
                                d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09" />
                            <path
                                d="M9 12a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.4 22.4 0 0 1-4 2z" />
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 .05 5 .05" /></svg></span>
                    <div class="mt-5 flex min-w-0 flex-1 flex-col @md:mt-0">
                        <h3 class="pr-7 text-base font-semibold text-neutral-950 dark:text-neutral-50"><a href="#"
                                class="after:absolute after:inset-0 focus-visible:outline-hidden">Buku, penghargaan, dan bisnis</a></h3>
                        <p class="mt-1 text-sm/6 text-neutral-600 dark:text-neutral-400">Bukunya, Mantappu Jiwa (Gramedia, 2019), meraih IKAPI Awards 2020 kategori Rookie of
the Year. Pada April 2021 ia dan kakaknya, Jehian, masuk Forbes 30 Under 30 Asia.
Usahanya antara lain Q&A Group, Mantappu Corp, dan Menantea, yang menutup seluruh
gerainya pada 25 April 2026.</p>
                        <p class="mt-auto pt-4 font-mono text-xs text-neutral-600 dark:text-neutral-400">Karya dan usaha
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