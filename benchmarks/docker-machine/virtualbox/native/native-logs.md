# VirtualBox & Native

Machine created with:
`docker-machine create --driver virtualbox --virtualbox-cpu-count 2 --virtualbox-disk-size 20000 --virtualbox-memory "8000" vbox-bench`

Logs:
```
$ docker run -it -v $(pwd):/var/test alpine time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000
100000+0 records in
100000+0 records out
real	0m 7.44s
user	0m 0.00s
sys	0m 3.43s
100000+0 records in
100000+0 records out
real	0m 7.90s
user	0m 0.00s
sys	0m 3.38s
100000+0 records in
100000+0 records out
real	0m 9.86s
user	0m 0.06s
sys	0m 2.97s
100000+0 records in
100000+0 records out
real	0m 9.93s
user	0m 0.00s
sys	0m 3.14s
100000+0 records in
100000+0 records out
real	0m 7.54s
user	0m 0.00s
sys	0m 3.48s
100000+0 records in
100000+0 records out
real	0m 7.77s
user	0m 0.00s
sys	0m 3.57s
100000+0 records in
100000+0 records out
real	0m 7.44s
user	0m 0.00s
sys	0m 3.44s
100000+0 records in
100000+0 records out
real	0m 7.73s
user	0m 0.02s
sys	0m 3.52s
100000+0 records in
100000+0 records out
real	0m 7.59s
user	0m 0.00s
sys	0m 3.51s
100000+0 records in
100000+0 records out
real	0m 8.59s
user	0m 0.00s
sys	0m 3.30s
100000+0 records in
100000+0 records out
real	0m 7.78s
user	0m 0.03s
sys	0m 3.53s
100000+0 records in
100000+0 records out
real	0m 9.55s
user	0m 0.00s
sys	0m 3.00s
100000+0 records in
100000+0 records out
real	0m 7.31s
user	0m 0.00s
sys	0m 3.39s
100000+0 records in
100000+0 records out
real	0m 9.73s
user	0m 0.06s
sys	0m 3.02s
100000+0 records in
100000+0 records out
real	0m 7.43s
user	0m 0.00s
sys	0m 3.45s```