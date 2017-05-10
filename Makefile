# Copy all files in dist to /var/www/done.txt
all: copy

copy:
	cp dist/* /var/www/done.txt
