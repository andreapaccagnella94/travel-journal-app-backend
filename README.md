# 🧭 Travel Journal App

> Web app per documentare i tuoi viaggi con post, tag, media e filtri. Interfaccia Blade + API ready per React.

![Laravel](https://img.shields.io/badge/Laravel-10.x-red)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-15+-4169E1)
![License](https://img.shields.io/badge/license-MIT-green)

---

## ✨ Funzionalità

- ✅ Auth utenti (login/register) con Laravel Breeze
- ✅ CRUD post diario di viaggio (titolo, descrizione, luogo, coordinate, mood, spese, riflessioni)
- ✅ Tag e media (immagini/video) associati ai post
- ✅ Filtri per luogo, mood, data, tag
- ✅ Autorizzazione: ogni utente gestisce solo i propri post
- ✅ Architettura API-ready per futuro frontend React

---

## 🧠 Architettura


Laravel gestisce backend + frontend iniziale. Le API REST sono già predisposte per un eventuale frontend React separato.

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
- **tags**: nome univoco
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
