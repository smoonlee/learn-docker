
#
apt update
apt install -y certbot python3-certbot-nginx


certbot certonly --nginx -d wordpress.az.hypervlab.co.uk --pre-service--hook service n