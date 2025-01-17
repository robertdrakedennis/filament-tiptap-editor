@props([
    'fieldId' => null,
])
<button type="button"
    class="p-2"
    :class="{ 'active': isActive('link', updatedAt) }"
    x-on:click="isActive('link', updatedAt) ? unsetLink() : $dispatch('open-modal', {id: 'filament-tiptap-editor-link-modal', fieldId: '{{ $fieldId }}'})"
    x-tooltip="'Link'">
    <svg x-show="!isActive('link', updatedAt)"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        aria-hidden="true"
        role="img"
        class="w-5 h-5 iconify iconify--ic"
        width="24"
        height="24"
        preserveAspectRatio="xMidYMid meet"
        viewBox="0 0 24 24">
        <path fill="currentColor"
            d="M17 7h-3c-.55 0-1 .45-1 1s.45 1 1 1h3c1.65 0 3 1.35 3 3s-1.35 3-3 3h-3c-.55 0-1 .45-1 1s.45 1 1 1h3c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-9 5c0 .55.45 1 1 1h6c.55 0 1-.45 1-1s-.45-1-1-1H9c-.55 0-1 .45-1 1zm2 3H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h3c.55 0 1-.45 1-1s-.45-1-1-1H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h3c.55 0 1-.45 1-1s-.45-1-1-1z">
        </path>
    </svg>
    <svg x-show="isActive('link', updatedAt)"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        aria-hidden="true"
        role="img"
        class="w-5 h-5 iconify iconify--ic"
        width="24"
        height="24"
        preserveAspectRatio="xMidYMid meet"
        viewBox="0 0 24 24">
        <path fill="currentColor"
            d="M14 9h2.87c1.46 0 2.8.98 3.08 2.42c.31 1.64-.74 3.11-2.22 3.48l1.53 1.53c1.77-.91 2.95-2.82 2.7-5.01C21.68 8.86 19.37 7 16.79 7H14c-.55 0-1 .45-1 1s.45 1 1 1zM3.51 3.51A.996.996 0 1 0 2.1 4.92l2.64 2.64c-1.77.91-2.95 2.82-2.7 5.01C2.32 15.14 4.63 17 7.21 17H10c.55 0 1-.45 1-1s-.45-1-1-1H7.13c-1.46 0-2.8-.98-3.08-2.42c-.31-1.64.75-3.11 2.22-3.48l2.12 2.12c-.23.19-.39.46-.39.78c0 .55.45 1 1 1h1.17l8.9 8.9a.996.996 0 1 0 1.41-1.41L3.51 3.51zM14 11l1.71 1.71A1.003 1.003 0 0 0 15 11h-1z">
        </path>
    </svg>
    <span class="sr-only">Link</span>
</button>
