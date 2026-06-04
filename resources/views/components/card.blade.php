@props(['is' => 'a'])

<{{ $is }} {{ $attributes(['class' => 'border border-border rounded-lg bg-card p-4 md:text-sm block']) }}>
  {{ $slot }}
</{{ $is }}>
