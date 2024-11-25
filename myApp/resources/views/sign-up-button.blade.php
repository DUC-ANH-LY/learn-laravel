<a class="button button--callout" >
    <i class="exclamation-icon"></i> {{ $text }}
</a>
{{-- Include a view if it exists --}}
@includeIf('sidebars.admin', ['some' => 'data'])
{{-- Include a view if a passed variable is truth-y --}}
@includeWhen($user->isAdmin(), 'sidebars.admin', ['some' => 'data'])
{{-- Include the first view that exists from a given array of views --}}
@includeFirst(['customs.header', 'header'], ['some' => 'data'])
