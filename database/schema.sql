CREATE DATABASE IF NOT EXISTS proloco_zagarolo
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE proloco_zagarolo;

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(80) NOT NULL UNIQUE,
    email VARCHAR(190) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(30) NOT NULL DEFAULT 'admin',
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS news (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(180) NOT NULL,
    slug VARCHAR(220) NOT NULL UNIQUE,
    content TEXT NOT NULL,
    image VARCHAR(255) NULL,
    published_at DATETIME NULL,
    status ENUM('draft','published') NOT NULL DEFAULT 'draft',
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    author_id INT UNSIGNED NULL,
    CONSTRAINT fk_news_author
      FOREIGN KEY (author_id) REFERENCES users(id)
      ON DELETE SET NULL ON UPDATE CASCADE,
    INDEX idx_news_status_date (status, published_at)
);

-- Richiesta da app/models/LoginAttempt.php per il blocco temporaneo dei
-- tentativi di login falliti (protezione anti brute-force, RNF-05).
-- Senza questa tabella OGNI tentativo di accesso all'area admin genera
-- un errore fatale (Table 'login_attempts' doesn't exist), rendendo
-- inutilizzabile l'intera area amministrativa.
CREATE TABLE IF NOT EXISTS login_attempts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(45) NOT NULL,
    attempted_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_login_attempts_ip_time (ip_address, attempted_at)
);
