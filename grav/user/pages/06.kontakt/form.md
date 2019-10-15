---
title: Kontakt
form:
    name: contact
    fields:
        email:
          label: Email
          placeholder: Geben Sie Ihre E-Mail Adresse ein
          type: email
          validate:
            required: true
        message:
          label: Nachricht
          placeholder: Ihre Nachricht an uns
          type: textarea
          validate:
            required: true
    buttons:
        submit:
          type: submit
          value: Senden
          classes: 'btn'
    process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        email:
            subject: "[Mueller Kontaktformular] {{ form.value.email|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        message: Danke für Ihre Anfrage!
        display: thankyou
---

Bitte hinterlassen Sie hier Ihre Anfrage...
