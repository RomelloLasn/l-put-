<!-- filepath: resources/views/emails/contact.blade.php -->
<h1>New Contact Form Submission</h1>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] ?? 'Not provided' }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>