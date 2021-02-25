#onlyhuman recepten
Deze website bevat alleen recepten van only humans.

##Timelog

14:00 Opzetten website, testen connecties met live omgeving

15:04 Beginnen DATABASE structuur, migrations,models enz.

Set up vagrant voor ontwikkeling

15:41 Welk veld zal ik gebruiken om de tijd van een recept weer te geven ?

16:32 Database seeding works

Models are added

Relations are added

Deploy online

17:07 Pagination overview learning livewire.

17:24 Zit momenteel een beetje vast op livewire omdat er zoveel gevraagd word terwijl mijn kennis nog vrij basis is.

Stop

Total time 3h 30m nog 4h 30m te gaan.



Wednesday 17:05

Een moeilijkheid met livewire is dat ik het alleen maar in een tutorial gebruikt heb.

Dus was ik nog geen 100% vertrouwed met hoe het werkte. Ik heb de voorbeeld code van de search opgeozcht.

En het ziet er vrij eenvoudig uit.



 17:47 Ik ben niet echt zeker hoe ik goed kan filteren met with en alleen de recepten terug geven.

18:11 Ik heb het kunnen doen werken met search en categories in één livewire commponent op één pagina.

Niet zeker of dat is wat er gewild is. Maar ik wou weten of het mogelijk was. Mijn queries moeten nog wat geoptimaliseerd worden.

Git commit push and deploy



Total time 4h 30m



Donderdag 13:30

Opnieuw kijken naar de search. En een betere manier gevonden om de eloquent search op te bouwen.

13:45 brake

14:00 Verder doen

14:28

15:06 even geprobeerd om de ingredient array om te zetten in een collcetion voor leesbaarder code en consistent manupilatie

Het duurt te lang om de oplossing te vinden dus ga ik een array gebruiken

15:13 input veld met nummers registreed niet meteen een call naar de backend.

Mogelijk moet er hier events gebruikt worden.

15:22 Beginners fout. Het model input veld die veranderd moet in de component zitten.

15:30 total 6h 15m

15:35 Implementeren van de show only when de value is set to true.

Ik vraag mij af of het mogelijk is om automatisch uit de resulaten niet 

I wonder if there is a method or something else that automaticly exclude these from tresults.

15:51 break

16:03

6h 45m

Kijken of ik nog een paar bugs van de seeder kan oplossen.

16:28

Bugs ogelost die ik kon oplossen

7h 15m

Rest van tijd styling

voor bootstrap gekozen met cdn

16:50

Added basic styling

17:12 final deploy en check

17:30 opschonen readme

## Opzoekwerk
Ik heb maar achteraf gelezen dat ik all mijn opzoekwerk moet bijhouden.
Meestal staan er op het einde rond 20 of meer tabs open met vragen.

https://laravel-livewire.com/docs/2.x/quickstart

https://laravel-livewire.com/docs/2.x/pagination

https://laravel.com/docs/8.x/eloquent#introduction

https://getbootstrap.com/

Stackoverflow specefieke vragen zoals: "How to append a pivot column in a seeder"

Ik heb ook veel naar mijn bestaande projecten gekeken

https://github.com/Darkbelg/videogamestracker/commit/bcac3e799e02b2dc2f5604534f2c754fa12be5f3#diff-459270a65f44db3b420a96ab09f3e83c218cdc5fe3d58bf083712d47bcd0c16d

https://github.com/Darkbelg/videogamestracker/blob/main/app/Http/Livewire/SearchDropdown.php

Alle urls die openstonden op het laatste moment:

https://www.google.com/search?client=ubuntu&hs=ZJL&channel=fs&sxsrf=ALeKk03MKrmllKCqQY1JCQI3zjZ-cx-qWQ%3A1614263666506&ei=crU3YLG1HsmSsAfCoKeADw&q=eloquent+only+reutrn+if+show+true&oq=eloquent+only+reutrn+if+show+true&gs_lcp=Cgdnd3Mtd2l6EAM6BwgAEEcQsAM6BAghEApQ6i9YrZUBYLKaAWgGcAJ4AIABjgGIAbIUkgEEMzMuMpgBAKABAaoBB2d3cy13aXrIAQjAAQE&sclient=gws-wiz&ved=0ahUKEwixtqnjoIXvAhVJCewKHULQCfAQ4dUDCAw&uact=5

https://www.google.com/search?client=ubuntu&hs=1Dg&channel=fs&sxsrf=ALeKk026GUOf4r_8d8ASkUnJhLse-6YaSQ%3A1614264606008&ei=Hbk3YIzpPI3VkwX7xa_wCg&q=laravel+response+404+page&oq=laravel+response+404+&gs_lcp=Cgdnd3Mtd2l6EAEYAjIECAAQEzIICAAQFhAeEBMyCAgAEBYQHhATMggIABAWEB4QEzIICAAQFhAeEBMyCAgAEBYQHhATMggIABAWEB4QEzIICAAQFhAeEBMyCAgAEBYQHhATMggIABAWEB4QEzoHCAAQRxCwA1DXBFjXBGDlEmgBcAJ4AIABY4gBsgGSAQEymAEAoAEBqgEHZ3dzLXdpesgBCMABAQ&sclient=gws-wiz

https://laravel.com/docs/8.x/eloquent-relationships

https://stackoverflow.com/questions/23226802/laravel-attach-pivot-to-table-with-multiple-values

https://laravel.com/docs/8.x/collections#method-random

https://www.google.com/search?channel=fs&client=ubuntu&q=eloquent+change+vaalue

https://stackoverflow.com/questions/24109535/how-to-update-column-value-in-laravel

https://getbootstrap.com/

https://getbootstrap.com/docs/5.0/layout/columns/

https://getbootstrap.com/docs/5.0/content/images/

https://getbootstrap.com/docs/5.0/examples/

https://getbootstrap.com/docs/5.0/examples/blog/

https://getbootstrap.com/docs/5.0/examples/blog/

https://getbootstrap.com/docs/5.0/examples/carousel-rtl/

https://getbootstrap.com/docs/5.0/examples/album-rtl/

https://laravel-livewire.com/docs/2.x/pagination

outlook voor credentials

https://www.google.com/search?channel=fs&client=ubuntu&q=eloquent+attach+with+pivot+data+random

https://stackoverflow.com/questions/42422068/laravel-eloquent-attach-auto-generate-random-id

https://www.google.com/search?channel=fs&client=ubuntu&q=eloquent+update+pivot

https://stackoverflow.com/questions/47818018/laravel-update-pivot-table

https://stackoverflow.com/questions/33543897/how-to-update-a-pivot-table-using-eloquent-in-laravel-5

https://laravel.com/docs/8.x/collections#method-each

https://www.google.com/search?channel=fs&client=ubuntu&q=eloquent+attach+loop

https://stackoverflow.com/questions/47298225/laravel-attach-object-to-many-objects-in-many-to-many-relationship-without-loop

https://www.google.com/search?channel=fs&client=ubuntu&q=eloquent+attach+with+pivot
