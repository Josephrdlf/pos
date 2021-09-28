<tr>
<td class="header">
<!-- <a href="{{ $url }}" style="display: inline-block;"> -->
@if (trim($slot) === 'Laravel')
<img src="https://w7.pngwing.com/pngs/486/962/png-transparent-smiley-face-computer-icons-smiley-miscellaneous-face-retro.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
