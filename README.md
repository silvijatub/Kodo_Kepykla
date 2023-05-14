# Internetinė svetainė "Kodo kepykla"

![image](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/930a987a-4850-4934-a933-b33366211f82)

## Įvadas

Modulio "P175B314 Programavimo inžinerija" projekto tiklas yra sukurti veikiančią programinę įrangą ir tos įrangos dokumentaciją. Paties modulio tikslas yra išmokti dirbti komandoje, kūrimo metu sistemingai pasiskirstyti ir atlikti darbus, taikant Scrum programų kūrimo procesų metodiką. Tai studentams suteikia ne tik darbo komandoje patirties, tačiau supažindinama ir su programinės įrangos kūrimo procesu, išmokoma parengti ir suprasti programinės įrangos reikalavimus, išmokti kurti tinkamą dokumentaciją bei naudotis versijavimo įrankiais tam, kad tarpinius dokumentus ir algoritmus būtų galima saugoti visai komandai prieinamoje vietoje.

## Komandos nariai

Scrum komandose yra trys vaidmenys: Scrum meistras, produkto savininkas ir kūrimo komanda. "Kodo kepyklos" komandoje šie vaidmenys paskirstyti šitaip:
* Guoda Stulpinaitė IFZ-1/1 – Scrum meistras, turi stebėti projekto vystymo procesą, yra atsakingas už tai, kad Scrum būtų suprantamas ir procesais būtų vykdomi vadovaujantis Scrum;
* Neda Narmontaitė IFZ-1/1 – produkto savininkas, turi maksimaliai padidinti produkto ir kūrimo komandos vertę, yra atsakingas už produkto veiklų sąrašo valdymą;
* Silvija Tūbaitė IFZ-1/1 – kūrimo komandos narė, dirba, jog projektas būtų atliktas pagal reikalavimus ir laiku;
* Jonas Gendvilas IFZ-1/1 – kūrimo komandos narys, dirba, jog projektas būtų atliktas pagal reikalavimus ir laiku.

## Techninė užduotis

Komandos projekto idėja – internetinė svetainė, kuri skirta naujai įsikūrusios kepyklėlės klientų pritraukimui ir kurioje būtų galima susipažinti su kepyklėlės tiekiama prancūziška produkcija, tokiais gaminiais kaip: prancūziški pyragaičiai - kanelės, prancūziškas batonas, kruasanai ar panašiai. Svetainėje turi būti pagrindinės panašaus tipo tinklalapių savybės: ką kepyklėlė gamina (visa produkcija, asortimentas), kokios yra tam tikrų gaminių kainos, šiek tiek informacijos apie pačią kepyklėlę (kaip įsikūrė ir kodėl), turi būti pateikta kontaktinė informacija, kad klientai galėtų susisiekti ir pasikonsultuoti jiems aktualiais klausimais, galimybė parašyti laišką kepyklai bei matomi ankstesni įvertinimai. Abstrakti dizaino idėja - sveitainė, kuri yra pakankamai paprasta, minimalistinė, tam, kad visa informacija būtų pateikiama aiškiai, suprantamai, bet tuo pat metu ir būtų funkcionalu ir lengva naudotis kiekvienam klientui.

**Funkciniai reikalavimai**:
1. Kiekvienas sistemoje esantis mygtukas kažkur veda.
2. Yra pateikiamos nuorodos į socialinius tinklus ir, paspaudus ant jų, ten ir nuveda.

![image](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/4ef34f5d-9ced-4ece-9b76-c5faa44c983c)
 
3. Galima matyti žemėlapį, kuris parodo vietą, kurioje įsikūrusi kepykla.

![image](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/5a8576ac-638e-4d71-8693-d225e164484c)

4. Kiekvieną parduodamą produktą galima peržiūrėti atskirai. 

![localhost_Kodo_Kepykla_product_page php_product=Chouquettes](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/ff922281-c38a-4ce3-834e-902fffd3c81c)

5. Tinklalapio viršuje esanti meniu juosta nuolat išlieka toje pačioje vietoje.
6. Produktų galerijos animacija keičia produkto nuotraukas.
7. Galima išsiųsti laišką kepyklai pateiktoje formoje. 

![image](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/ae370c53-8a33-48b1-a25c-27f86bff5dc9)

8. Galima į pirkinių krepšelį įsidėti norimą produktą.
9. Sumažinus tinklalapio dydį, galima pastebėti atsirandantį šoninį meniu, o objektai tinklalapyje prisitaiko prie lango dydžio. 

![image](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/423f4337-f94f-4944-985c-cbeff13076c2)

10. Jei nėra kažkokio produkto, galima matyti, jog negalima jo pirkti. 

![image](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/606eaa7e-e49a-4f97-ab05-50bfd5801670)

11. Paieškos lange įvedus kažkokį žodį, galima surasti norimą produktą.

![image](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/91e4bd08-7862-4786-b4b8-e2193536ac9c)


**Nefunkciniai reikalavimai**:
1. Tinklalapio dizainas pastovus.
2. Tekstas sistemoje tinkamo ir patogaus dydžio.
3. Gan lengvai suprantama naudotojui.
4. Spalvos, nerėžiančios akies.
5. Naudojamos kelios tos pačios spalvos:

![image](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/d97dc9b8-8bb8-4fd3-ad79-51865025df94)

## Architektūra

Abstrakti tinklalapio architektūra atrodo maždaug taip:

![Screenshot_1](https://github.com/silvijatub/Kodo_Kepykla/assets/91486697/b40e4096-d8e3-4908-a7f7-a5f06fb24a0d)

Iš šio paveikslėlio galime matyti, kad iš namų puslapio galima pereiti į "Apie mus", "Meniu", "Karjera", "Privatumo politika", "Kontaktai" ir pirkinių krepšelio puslapius. Žinoma, iš kiekvieno to puslapio galima pereiti į bet kurį kitą. Detaliau apie kiekvieną iš tų puslapių:
1. "Apie mus" puslapyje galima pamatyti, kas tai per įmonė.
2. "Meniu" puslapyje galima pamatyti, kokie produktai yra parduodami ir, žinoma, galima pereiti į kiekvieno produkto puslapį.
3. "Karjera" puslapyje galima pamatyti informaciją apie tai, kokių žmonių ieškoma į kolektyvą, kas yra siūloma darbininkams bei kokios yra darbo sąlygos.
4. "Privatumo politika" puslapyje yra pateikta privatumo politikos informacija.
5. "Kontaktai" puslapyje yra pateikiama kontaktinė informacija bei galimybė išsiųsti laišką puslapį administruojantiems asmenims.
6. Pirkinių krepšelio puslapyje galima pamatyti, kokie produktai yra įdėti į pirkinių krepšelį.

Taip pat nėra paminėta, tačiau į paieškos lauką įvedus kažkokį žodį, yra perkeliama į paieškos rezultatų puslapį. Ten galima pamatyti visus produktus, kurie atitinka paieškos raktinį žodį.


## Testavimas ir jo rezultatai

Nr. | Testavimo atvejis | Tikėtinas rezultatas | Realus rezultatas 
--- | --- | --- | --- |
1 | "Daugiau apie mus" mygtukas | Atidaromas "Apie mus puslapis"; meniu punktas "Apie mus" paryškintas | Atititinka tikėtiną
2 | Logotipo mygtukas | Iš kiekvieno puslapio grįžtama į pagrindinį | Atititinka tikėtiną
3 | "Pirkėjų mylimiausi" mygtukai | Kiekvienas iš 5 mygtukų veda į meniu puslapį ir iki atitinkamo produkto aprašymo | Atititinka tikėtiną
4 | "Žiūrėti visus produktus" mygtukas | Atidaro meniu puslapį, meniu punktas paryškintas | Atititinka tikėtiną
5 | Socialinių tinklų mygtukai | Mygtukai atitinkamai atidaro nuorodas į "Instagram" ir "Facebook" tinklalapius | Atititinka tikėtiną
6 | Paieška ieškant frazės "tokioproduktonera" | Rodomas pranešimas, kad produktų nerasta | Atititinka tikėtiną
7 | Paieška ieškant frazės "pranc" | Rodomi 6 surasti produktai | Atititinka tikėtiną
8 | Kruasano produkto nuotrauka | Paspaudus atidaromas puslapis su detalesne informacija apie kruasanus | Atititinka tikėtiną
9 | Produkto kiekio pasirinkimo mygtukai (produktų skaičių bandoma sumažinti iki neigiamo) | Neleidžiama rinktis mažesnio nei 0 produkto kiekio | Atititinka tikėtiną
10 | Produkto kiekio pasirinkimo mygtukai (tikrinamas + ir - funkcionalumas) | Paspaudus mygtukus prekės kiekis padidėja/sumažėja vienetu | Atititinka tikėtiną
11 | Laiško išsiuntimas užpildant formą | Užpildžius formą (įvedus vardą, pavardę, elektroninį paštą ir žinutę), laiškas išsiunčiamas į kodokepykla@gmail.com | Atitinka tikėtiną

Taip pat buvo atlikti testavimai kiekvienam iš sukurtų puslapių. 
Pirmiausia, kiekvienas komandos narys tikrino ne savo rašytą kodą ir, jei reikėjo, atliko tam tikrus pakeitimus (tai atitinka statinį programinės įrangos testavimo būdą). Neda testavo Silvijos kodą, Silvija testavo Jono kodą, Jonas testavo Guodos kodą, o Guoda testavi Nedos kodą. Buvo surasta keletas klaidų (daugiausiai dizaine) ir šios buvo daugiau mažiau pašalintos.
Vėliau, kiekvienas komandos narys (atitinkamai kaip ir prieš tai) testavo ne savo sukurtus puslapius juos paleidus (tai atitinka dinaminį programinės įrangos testavimo būdą). Buvo atliekamas testavimas taikant "baltos dėžės" metodiką, kai buvo žinoma, kas turi įvykti atliekant tam tikrus veiksmus. O vėliau, buvo taikoma "juodos dėžės" metodika, kai nėra žinoma, kas turi įvykti (tai atitiktų naudotojo patirtį) ir buvo spaudinėjami mygtukai per daug nesigilinant į tai, kas vyksta. Nebuvo kilę jokių nesklandumų. Galiausiai buvo duota programinė įranga testuoti su projektu nesusijusiam asmeniui (kitos studijų programos studentui), tačiau jokia problema ir tada neaiškilo.

## Naudotojo dokumentacija

**ĮVADAS**

**Kas yra ,,Kodo Kepykla“?**

Tai prancūziškų kepinių kepyklos ,,Kodo Kepykla“ svetainė, skirta pateikti informaciją apie kepyklą, jos parduodamas prekes bei suteikti galimybę įsigyti parduodamus produktus internetu.

**Kam naudojama svetainė?**

Svetainėje ,,Kodo Kepykla“ galima:

1.	Ieškoti kepyklos siūlomų produktų
2.	Peržiūrėti kepyklos siūlomus produktus 
3.	Pirkti kepyklos siūlomus produktus
4.	Įvertinti įsigytą produktą
5.	Peržiūrėti informaciją apie ,,Kodo Kepyklą“
6.	Susisiekti su ,,Kodo Kepykla“

**NAUDOJIMAS**

**Prekės paieška**

1.	Visus kepyklos siūlomus produktus galima rasti puslapyje ,,Meniu“, į kurį galima patekti spaudžiant viršutinėje juostoje esančią nuorodą arba pagrindiniame svetainės puslapyje spaudžiant ,,Žiūrėti visus produktus“.
2.	Prekės galima ieškoti pagal jos pavadinimą arba aprašymą, viršutinėje svetainės juostoje esančiame paieškos laukelyje įvedus tekstą.
3.	Apie kiekvieną produktą galima matyti tokią informaciją: pavadinimas, įvertinimas, kaina, aprašymas, nuotrauka.

**Pirkimas**

Prekės įdėjimas į krepšelį

1.	Prekę įdėti į krepšelį galima spaudžiant mygtuką ,,Į krepšelį“, esantį prie kiekvienos prekės. Jei to produkto tuo metu nėra, mygtus nebus aktyvus.
2.	Esant ,,Meniu“ puslapyje, spaudžiant mygtuką ,,Į krepšelį“, į krepšelį bus įdėta viena prekė. Esant produkto puslapyje, reikia pasirinkti norimą produktų kiekį.

Krepšelis

1. Krepšelyje galite keisti prekių kiekius, pašalinti prekes iš krepšelio.
2.	Norint toliau tęsti apsipirkimą, spausti ,,Užsakyti“.

**Susisiekimas su ,,Kodo Kepykla“**

1.	Susisiekti su kepykla galima puslapyje ,,Kontaktai“, kuriame galite tiesiogiai rašyti žinutę ,,Kodo Kepyklai“ elektroniniu paštu.
2.	Puslapyje ,,Kontaktai“ rasite ir kitus būdus susisiekti su kepykla.
3.	Kontaktai taip pat pateikiami apatinėje svetainės juostoje.


## Priedai
Čia pateikiama, kas buvo reikalinga šiam darbui:

Jira:

https://kodkep.atlassian.net/jira/software/projects/KOD/boards/1

Slack:

https://app.slack.com/client/T04RCJ92JAX/C04RRB7DX17

Figma:

https://www.figma.com/file/T7jxFurvjHForgSoD2ncTe/Kodo_Kepykla?type=design&node-id=0-1&t=AE72WJZ7LLOrBbx5-0

Miro:

https://miro.com/app/board/uXjVMZCKklU=/?fbclid=IwAR0s6C1ybXhM7L5fyjt-y2VxNxlpK6nbKlD-WmjgbRaI3vWNlO0yW94_aNQ
