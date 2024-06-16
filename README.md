# Ponto-online-Crud
É um registrador de ponto online, através de um crud em php puro.

- Bootstrap 5.3.3
- Php
- MySQL
- Composer

# Script DataBase
```
-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS horario_db;
USE horario_db;

-- Criação da tabela
CREATE TABLE horarios (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Data DATE NOT NULL,
    Hr_inicio TIME NOT NULL,
    Hr_final TIME NOT NULL
);
```

## Exemplo inserção de dados
```
-- Inserção de dados de exemplo
INSERT INTO horarios (Data, Hr_inicio, Hr_final) VALUES
('2024-06-15', '08:30', '10:30'),
('2024-06-16', '09:00', '11:00'),
('2024-06-17', '10:00', '12:00');
```