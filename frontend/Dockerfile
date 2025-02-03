FROM node:18

WORKDIR /app

# Копируем только package.json и package-lock.json
COPY package*.json ./

# Устанавливаем все зависимости, включая devDependencies
RUN npm install

# Копируем все остальные файлы
COPY . .

EXPOSE 3000

CMD ["npm", "run", "dev"]
