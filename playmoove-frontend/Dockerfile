# Dockerfile

# Base image
FROM node:16-alpine

# Set working directory
WORKDIR /app

# Install dependencies
COPY package*.json ./
RUN npm install

# Copy app files
COPY . .

# Expose port and start the app
EXPOSE 8080
CMD ["npm", "run", "serve"]
