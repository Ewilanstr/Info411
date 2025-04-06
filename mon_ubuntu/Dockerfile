# Start your image with a node base image
FROM ubuntu

# Install node packages, install serve, build the app, and remove dependencies at the end
RUN apt update && \
apt upgrade -y && \
apt install -y nano vim net-tools dnsutils curl wget links telnet mysql-client

# Start the app using serve command
# commande permet de pas finir le prog
CMD [ "tail", "-f", "/dev/null" ]