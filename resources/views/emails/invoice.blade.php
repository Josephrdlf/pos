@component('mail::message')
**Hello**, name <br>
**Order id** = angka <br> <br>
Items ordered :

<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->

@component('mail::table')
| Product       | Quantity      | Price    |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
<br>
@component('mail::table')
|Total          |       ==      |   $30    |
| ------------- |:-------------:| --------:|

@endcomponent
@endcomponent


Thanks,<br>
Point Of Sales
<!-- {{ config('app.name') }} -->
@endcomponent
