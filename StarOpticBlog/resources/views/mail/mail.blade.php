<p>Poruka:</p>
<p>{{$data['message']}}</p>

<div style="margin-top: 50px;">
    <p>Ime i prezime: {{$data['firstname']}} {{$data['lastname']}} </p>
    @if($data['phone'])
    <p>Broj telefona: {{$data['phone']}} </p>
    @else
      <p>Korisnik nije ostavio broj telefona</p>
    @endif
    <p>Email: {{$data['email']}}</p>
</div>
