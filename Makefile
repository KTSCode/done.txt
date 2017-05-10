# Copy all files in dist to /var/www/done.txt
all: copy

copy:
	cp -R dist/* /var/www/done.txt
