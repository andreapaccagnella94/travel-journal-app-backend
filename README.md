> Web app per documentare i propri viaggi tramite post, tag e contenuti multimediali.  
> Backend sviluppato con Laravel, con interfaccia Blade e API pronte per integrazione futura con React.

![Laravel](https://img.shields.io/badge/Laravel-10.x-red)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-15+-4169E1)
![License](https://img.shields.io/badge/license-MIT-green)

---

## ✨ Stato Attuale del Progetto

### ✔ Completato

- Autenticazione utenti (login/register) con Laravel Breeze  
- CRUD completo dei Post  
- CRUD completo dei Tag (con colore personalizzato)  
- Relazioni:
  - User → Post (1:N)
  - Post → Media (1:N) *(struttura pronta)*
  - Post ↔ Tag (N:N)  
- Associazione Tag ai Post (create/edit)  
- UI server-side con Blade  
- Protezione dei dati: ogni utente gestisce solo i propri post  

---

## 🚧 In sviluppo

- Upload e gestione Media (immagini/video)  
- Filtri avanzati (mood, tag, distanza, testo)  
- Dashboard riepilogativa  
- Frontend React separato  

---

## 🧠 Architettura

```text
Browser
   ↓
Laravel (Blade + API)
   ↓
PostgreSQL

---

## 🛠️ Stack

| Componente | Tecnologia |
|------------|-----------|
| Framework | Laravel 10.x |
| Backend | PHP 8.2+ |
| Database | PostgreSQL 15+ |
| Auth | Laravel Breeze |
| Frontend | Blade + Vite (React-ready) |
| API | RESTful JSON |

---

## 📦 Installazione Rapida

1. Clona il repo e entra nella cartella
2. Copia `.env.example` in `.env` e configura il database PostgreSQL
3. Installa dipendenze: `composer install` + `npm install`
4. Genera key: `php artisan key:generate`
5. Esegui migration: `php artisan migrate`
6. Avvia: `php artisan serve` + `npm run dev`

> 📋 Dettagli completi nel file `INSTALL.md` (opzionale) o nella documentazione Laravel.

---

## 🗄️ Database (Schema Essenziale)

- **users**: gestito da Laravel Breeze
- **posts**: titolo, descrizione, location, coordinate (lat/lng), mood, riflessioni, effort, expense
- **tags**: nome univoco + etichette colore
- **media**: tipo (image/video) + url, collegato a un post
- **post_tag**: tabella pivot per relazione many-to-many

Relazioni:
- User → Posts (1:N)
- Post → Media (1:N)
- Post ↔ Tag (N:N)

---

## 🔐 Auth & Permissions

- Login/register pronti con Breeze
- Middleware `auth` protegge le rotte

---

## 🚀 Utilizzo

- Interfaccia Blade: accessibile dopo il login a `/login`
- API REST: endpoint `/api/posts` per integrazione frontend esterno
- Filtri disponibili via query params: `?mood=happy&tag=mare&from=2024-01-01`

---


## 🤝 Contribuire

1. Fork → 2. Branch feature → 3. Commit → 4. Pull Request  
Segui PSR-12, scrivi test per nuove funzionalità, documenta le modifiche.

---

## 📜 Licenza

MIT — vedi file `LICENSE`.

---

> ⭐ Ti piace? Lascia una stella su GitHub! 🚀


