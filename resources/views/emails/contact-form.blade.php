<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordicsiffran | Contact Form Email</title>
</head>
<body style="margin:0; padding:0; background:#f4f4f4; font-family: Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4; padding:30px 0;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#FF8159; padding:25px; text-align:center;">
                            <h1 style="margin:0; color:#ffffff; font-size:24px;">
                                New Contact Form Submission
                            </h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; color:#333333;">

                            <p style="font-size:16px; margin-top:0;">
                                You have received a new message from <a href="https://nordicsiffran.se" target="_blank">Nordicsiffran Website</a> contact form.
                            </p>

                            <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse; margin-top:20px;">

                                <tr>
                                    <td width="150" style="background:#f8fafc; font-weight:bold; border:1px solid #e5e7eb;">
                                        Name
                                    </td>
                                    <td style="border:1px solid #e5e7eb;">
                                        {{ $data['first_name'] . ' ' . $data['last_name'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="background:#f8fafc; font-weight:bold; border:1px solid #e5e7eb;">
                                        Email
                                    </td>
                                    <td style="border:1px solid #e5e7eb;">
                                        {{ $data['email'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="background:#f8fafc; font-weight:bold; border:1px solid #e5e7eb;">
                                        Phone
                                    </td>
                                    <td style="border:1px solid #e5e7eb;">
                                        {{ $data['phone'] ?? 'N/A' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="background:#f8fafc; font-weight:bold; border:1px solid #e5e7eb;">
                                        Subject
                                    </td>
                                    <td style="border:1px solid #e5e7eb;">
                                        General Inquiry
                                    </td>
                                </tr>

                                <tr>
                                    <td style="background:#f8fafc; font-weight:bold; border:1px solid #e5e7eb; vertical-align:top;">
                                        Message
                                    </td>
                                    <td style="border:1px solid #e5e7eb; line-height:1.6;">
                                        {!! nl2br(e($data['message'])) !!}
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f8fafc; padding:20px; text-align:center; color:#6b7280; font-size:13px;">
                            This email was sent from <a href="https://nordicsiffran.se" target="_blank">Nordicsiffran</a> contact form.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>