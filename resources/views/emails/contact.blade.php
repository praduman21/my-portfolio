<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body style="background-color: #f4f4f4; font-family: Arial, sans-serif; padding: 20px;">
    <div style="background-color: #ffffff; padding: 20px; border-radius: 8px; max-width: 600px; margin: 0 auto; border: 1px solid #ddd;">
        <h2 style="color: #333;">New Message from Portfolio</h2>
        <hr style="border: 0; border-top: 1px solid #eee;">
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Phone No:</strong> {{ $data['phone'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p style="background: #f9f9f9; padding: 15px; border-left: 4px solid #0d6efd; border-radius: 4px;">
            <strong>Message:</strong><br>
            {{ $data['message'] }}
        </p>
    </div>
</body>
</html>