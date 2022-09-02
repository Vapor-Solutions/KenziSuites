<small>
    @for ($i = 0; $i < $count; $i++)
        @if ($count >= $i && $count < $i + 1)
            <i class="lni lni-star-half"></i>
        @else
            <i class="lni lni-star-filled"></i>
        @endif
    @endfor

</small>
