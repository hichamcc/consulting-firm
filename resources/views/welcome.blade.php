<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Delivery Dashboard</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white dark:bg-gray-950 antialiased">
        <!-- Navigation -->
        <nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white/80 backdrop-blur-lg dark:border-gray-800 dark:bg-gray-950/80">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-gray-900 dark:text-white">ProjectPulse</span>
                    </div>
                    @if (Route::has('login'))
                        <div class="flex items-center gap-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-blue-700">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 transition hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">
                                    Log in
                                </a>
                        
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative overflow-hidden pt-32 pb-20 sm:pt-40 sm:pb-28">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-indigo-50 dark:from-gray-900 dark:via-gray-950 dark:to-blue-950"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMDMiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-40"></div>

            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-4 py-2 text-sm font-medium text-blue-700 dark:border-blue-900 dark:bg-blue-950/50 dark:text-blue-300">
                        <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Dashboard with Smart Technology
                    </div>

                    <h1 class="mb-6 text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-6xl lg:text-7xl">
                        Project Delivery
                        <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Dashboard</span>
                    </h1>

                    <p class="mx-auto mb-10 max-w-2xl text-lg text-gray-600 dark:text-gray-400 sm:text-xl">
                        Say goodbye to Excel spreadsheets. Track your consulting firm's project delivery with automated RAG status, real-time collaboration, and executive-ready insights.
                    </p>

                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('login') }}" class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-8 py-4 text-base font-semibold text-white shadow-lg transition hover:bg-blue-700 hover:shadow-xl">
                            View Demo Dashboard
                            <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20 bg-white dark:bg-gray-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mb-16 text-center">
                    <h2 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">Features</h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                    <!-- Feature 1 -->
                    <div class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-8 transition hover:shadow-xl dark:border-gray-800 dark:bg-gray-900">
                        <div class="mb-5 inline-flex rounded-xl bg-green-100 p-3 dark:bg-green-950">
                            <svg class="size-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 dark:text-white">Automated RAG Status</h3>
                        <p class="text-gray-600 dark:text-gray-400">No manual formulas. Status calculated instantly from dates. Never worry about broken cell references again.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-8 transition hover:shadow-xl dark:border-gray-800 dark:bg-gray-900">
                        <div class="mb-5 inline-flex rounded-xl bg-blue-100 p-3 dark:bg-blue-950">
                            <svg class="size-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 dark:text-white">Multi-User Collaboration</h3>
                        <p class="text-gray-600 dark:text-gray-400">Multiple PMs edit simultaneously. No more "file is locked" or version conflicts. Real-time updates for everyone.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-8 transition hover:shadow-xl dark:border-gray-800 dark:bg-gray-900">
                        <div class="mb-5 inline-flex rounded-xl bg-purple-100 p-3 dark:bg-purple-950">
                            <svg class="size-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 dark:text-white">Beautiful Visualizations</h3>
                        <p class="text-gray-600 dark:text-gray-400">KPI tiles, progress bars, and trend indicators that impress your CEO. Executive-ready from day one.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white p-8 transition hover:shadow-xl dark:border-gray-800 dark:bg-gray-900">
                        <div class="mb-5 inline-flex rounded-xl bg-amber-100 p-3 dark:bg-amber-950">
                            <svg class="size-8 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 dark:text-white">Access Anywhere</h3>
                        <p class="text-gray-600 dark:text-gray-400">Share via URL. Work from any device. No more emailing Excel files back and forth.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 to-indigo-600 py-20">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLW9wYWNpdHk9IjAuMSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-30"></div>

            <div class="relative mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="mb-6 text-4xl font-bold text-white sm:text-5xl">Ready to Modernize Your Workflow?</h2>
                <p class="mx-auto mb-10 max-w-2xl text-xl text-blue-100">
                    See how easy it is to track projects with automated RAG status and real-time collaboration.
                </p>
                <a href="{{ route('login') }}" class="inline-flex items-center gap-2 rounded-lg bg-white px-8 py-4 text-base font-semibold text-blue-600 shadow-xl transition hover:bg-gray-50">
                    Try Demo Now
                    <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-gray-200 bg-white py-12 dark:border-gray-800 dark:bg-gray-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        &copy; 2025 ProjectPulse. Built with Laravel.
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>
