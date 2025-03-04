FROM node:18

WORKDIR /app

COPY package*.json ./

RUN rm -rf node_modules package-lock.json
RUN npm install
RUN npm install vite  # Убедитесь, что vite установлен

COPY . .

CMD ["npm", "run", "dev"]
