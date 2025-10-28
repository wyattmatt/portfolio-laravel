<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 {{ $featured ? 'border-2 border-yellow-400' : '' }}">
    @if($project->image)
    <div class="h-48 bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
    </div>
    @else
    <div class="h-48 bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
        <svg class="w-20 h-20 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
        </svg>
    </div>
    @endif

    <div class="p-6">
        <div class="flex items-start justify-between mb-3">
            <h3 class="text-xl font-bold text-gray-900">{{ $project->title }}</h3>
            @if($project->is_featured)
            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded">Featured</span>
            @endif
        </div>

        <p class="text-gray-600 mb-4 line-clamp-3">{{ $project->description }}</p>

        <!-- Technologies -->
        @if($project->technologies && count($project->technologies) > 0)
        <div class="mb-4">
            <div class="flex flex-wrap gap-2">
                @foreach($project->technologies as $tech)
                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Date -->
        @if($project->start_date)
        <div class="text-sm text-gray-500 mb-4 flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            {{ $project->start_date->format('M Y') }}
            @if($project->end_date)
            - {{ $project->end_date->format('M Y') }}
            @else
            - Ongoing
            @endif
        </div>
        @endif

        <!-- Links -->
        <div class="flex gap-3">
            @if($project->url)
            <a href="{{ $project->url }}" target="_blank" class="flex-1 bg-primary text-white px-4 py-2 rounded-lg text-center hover:bg-secondary transition duration-300 text-sm font-semibold">
                <span class="flex items-center justify-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    Live Demo
                </span>
            </a>
            @endif

            @if($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank" class="flex-1 bg-gray-800 text-white px-4 py-2 rounded-lg text-center hover:bg-gray-700 transition duration-300 text-sm font-semibold">
                <span class="flex items-center justify-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                    GitHub
                </span>
            </a>
            @endif
        </div>
    </div>
</div>