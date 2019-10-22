---
title: Termine
visible: false
allowCSS: default
allowJS: default
content:
    items:
        - '@self.children'
    order:
        by: folder
        dir: desc
    sibling_links: false
    dateRange:
        start: today
        field: header.event_date
show_header_image: false
render:
    children:
        style: summary
        image: false
        subtitle: true
        category: true
        date: false
        nested_children: true
---

Michael Müller ist demnächst hier zu sehen.
