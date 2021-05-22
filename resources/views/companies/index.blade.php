<h1>
    Hello world

    <ul>
@foreach($companies as $company)

    <li><a href="/companies/{{$company->id}}">{{ $company->name }}</a></li>
    @endforeach;
    </ul>
</h1>
