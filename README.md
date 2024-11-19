# 🛠️ Laravel Clean Architecture Boilerplate

## 🌟 Overview

The **Laravel Clean Architecture Boilerplate** is a foundational project that follows **Clean Architecture** principles for Laravel applications. It is designed to help developers quickly start projects with a solid, maintainable structure while adhering to best practices. This boilerplate includes pre-configured Docker support and a sample API endpoint for managing users.

## 🚀 Features

- 🏗️ **Clean Architecture Structure**: Organized for scalability and maintainability.
- 📋 **Pre-configured User Management**: Includes a `/users` endpoint to list users.
- 🐳 **Docker Support**: Easy setup and deployment using Docker and Docker Compose.
- 🛠️ **Ready-to-Use Environment**: Includes environment variables and Laravel setup.

## 📚 API Documentation

### 🔍 `/users` Endpoint

**Description**: Fetches a list of users from the `users` table.

- **Method**: `GET`
- **URL**: `/users`
- **Response Format**: JSON

#### Response Example:

```json
{
  "data": [
    {
      "id": "f47ac10b-58cc-4372-a567-0e02b2c3d479",
      "name": "John Doe",
      "email": "johndoe@example.com"
    },
    {
      "id": "5b3a2d8f-e9b5-488d-99d3-7c5a51f3bfb2",
      "name": "Jane Smith",
      "email": "janesmith@example.com"
    }
  ],
  "message": "Users returned successfully"
}
```

- **Response Fields**:
  - `data`: Array of user objects.
    - `id` (string): User ID (UUID v4).
    - `name` (string): User's name.
    - `email` (string): User's email.
  - `message` (string): Success message.

---

## 🛠️ Installation

### Prerequisites

- 🐘 Docker and Docker Compose installed

### Steps

1. **Clone the repository**:

```bash
git clone https://github.com/gabrieltorresdev/laravel-clean-architecture-boilerplate.git
```

2. **Navigate to the project directory**:

```bash
cd laravel-clean-architecture-boilerplate
```

3. **Copy the `.env` file and set your environment variables**:

```bash
cp .env.example .env
```

Update the `.env` file with your database and other configurations.

4. **Build and start the Docker containers**:

```bash
make start
```

_OR_

```bash
docker-compose up --build -d
```

5. **Run database migrations and seed the database**:

```bash
make shell
php artisan migrate --seed
```

_OR_

```bash
docker-compose exec app php artisan migrate --seed
```

6. **Access the application**:
   - Open your browser and navigate to [http://localhost:8000](http://localhost:8000).

---

## 🤝 Contributing

Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.

## 📜 License

This project is licensed under the MIT License. See the LICENSE file for more details.
