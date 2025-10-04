FROM node:18-alpine

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Copie os arquivos de dependência
COPY package*.json ./

# Configure variáveis de ambiente
ENV NODE_ENV=production
ENV CI=true

# Primeiro, atualize o package-lock.json
RUN npm install --package-lock-only

# Limpe qualquer cache problemático
RUN npm cache clean --force

# Instale as dependências
RUN npm ci --only=production=false --verbose

# Copie os arquivos de código
COPY . .

# Execute o build com mais informações
RUN npm run build -- --debug

# Configuração para produção
FROM nginx:alpine
COPY --from=0 /var/www/html/dist /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
