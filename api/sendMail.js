// api/sendMail.js
import nodemailer from "nodemailer";

export default async function handler(req, res) {
  if (req.method !== "POST") {
    return res.status(405).json({ message: "Only POST requests allowed" });
  }

  const { name, email, subject, number, message } = req.body;

  if (!name || !email || !subject || !number || !message) {
    return res.status(400).json({ message: "Please complete the form" });
  }

  try {
    const transporter = nodemailer.createTransport({
      service: "gmail",
      auth: {
        user: process.env.EMAIL_USER,
        pass: process.env.EMAIL_PASS,
      },
    });

    await transporter.sendMail({
      from: `"${name}" <${email}>`,
      to: "umairmanzoor320@gmail.com",
      subject: `New contact: ${subject}`,
      text: `Name: ${name}\nEmail: ${email}\nNumber: ${number}\nMessage: ${message}`,
    });

    res.status(200).json({ message: "Thank You! Your message has been sent." });
  } catch (err) {
    res
      .status(500)
      .json({ message: "Oops! Something went wrong.", error: err.message });
  }
}
