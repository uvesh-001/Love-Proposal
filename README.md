How It Works
User Interaction:

The user opens index.html and selects either "Yes" or "No" to a love letter.

Form Submission:
The form posts the selected response to submit.php.

SMS Notification:
submit.php uses Twilio’s PHP SDK to send the response to a designated phone number via SMS.

Redirection:
If the answer is "Yes" → Redirects to thank_you.php with a glowing romantic message.
If the answer is "No" → Redirects to message_sent.php with a calm closing message.

Technologies Used:
Frontend: HTML5, CSS3 (with Google Fonts, animation)
Backend: PHP
API: Twilio SMS API

Package Manager: Composer (for Twilio PHP SDK)
