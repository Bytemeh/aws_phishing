#!/usr/bin/python3
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from email.utils import formatdate

# config variables
email_subj = "AWS Free Tier limit alert"
email_body_file = "./phish_email.html"
email_server = "" # TODO: add SMTP server here
email_from = "tier_alerts@amazon.org"
sender = "tier_alerts@amazon.org" 
def send_email(email_to: str):
    "Send email to the specified recepient"

    msg = MIMEMultipart()
    msg['From'] = email_from
    msg['To'] = email_to
    msg['Date'] = formatdate(localtime=True)
    msg['Subject'] = email_subj

    with open(email_body_file, 'r') as f:
        body = f.read()
    
    msg.attach(MIMEText(body, 'html'))

    smtp =smtplib.SMTP(email_server)
    smtp.sendmail(sender, email_to, msg.as_string())
    smtp.close()

if __name__ == '__main__':
    email_to = '' # TODO: Add recepient here
    send_email(email_to)
