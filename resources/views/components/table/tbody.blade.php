<tbody>
    <tr
        {{ $attributes->merge(['class' => 'text-center odd:bg-white odd:text-dark-blue even:bg-dark-blue even:text-white']) }}>
        {{ $slot }}
    </tr>
</tbody>