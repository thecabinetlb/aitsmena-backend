<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1><strong>Name:</strong></h1> <p>{{ $contact['name'] }}</p>
    <h1><strong>Email:</strong></h1> <p>{{ $contact['email'] }}</p>
    <h1><strong>Phone:</strong></h1> <p>{{ $contact['phone'] }}</p>
    <h1><strong>Country:</strong></h1> <p>{{ $contact['country'] }}</p>
    <h1><strong>City:</strong></h1> <p>{{ $contact['city'] }}</p>
    <h1><strong>Industry:</strong></h1> <p>{{ $contact['industry'] }}</p>
    <h1><strong>Inquiry:</strong></h1> <p>{{ $contact['inquiry'] }}</p>
    <h1><strong>Message:</strong></h1> <p>{{ $contact['content'] }}</p>
</body>
</html>
