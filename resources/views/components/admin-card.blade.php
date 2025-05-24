  @props(['head', 'body'])

  <div class="flex justify-between items-center p-6 rounded-md shadow-md bg-secondary-bg">
      <div>
          <p class="text-sm font-medium text-tertiary-text">{{ $head }}</p>
          <p class="text-3xl font-bold text-primary-text">{{ $body }}</p>
      </div>
      {{ $slot }}
  </div>
