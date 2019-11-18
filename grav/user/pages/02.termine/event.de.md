---
title: Termine
allowCSS: default
allowJS: default
content:
    items:
        - '@self.children'
    sibling_links: false
    dateRange:
        start: today
        field: header.event_date
    order:
        by: header.event_date
        dir: asc
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
