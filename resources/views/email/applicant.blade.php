<!doctype html>

<html>

<head>
    <title>Hello {{$applicant->first_name}}</title>
</head>

<body>
    <h1>Hello {{$applicant->first_name}}</h1>
    <h2>Welcome DevCent</h2>
    <h2>Application details</h2>
    <h1>{{$applicant->first_name}}</h1>
    <h1>{{$applicant->last_name}}</h1>
    <h1>{{$applicant->email}}</h1>
    <h1>{{$applicant->phone}}</h1>
    <h1>{{$applicant->payment_mode}}</h1>
    <h1>{{$applicant->course_name}}</h1>
    <h1>{{$applicant->amount_due}}</h1>
    <h1>{{$applicant->application_id}}</h1>
    <h1>{{$applicant->payment_completed}}</h1>
</body>

</html>