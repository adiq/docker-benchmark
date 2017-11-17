# VirtualBox & NFS

Machine created with:
`docker-machine create --driver virtualbox --virtualbox-cpu-count 2 --virtualbox-disk-size 20000 --virtualbox-memory "8000" vbox-bench`

NFS configured using `docker-machine`; command `docker-machine-nfs vbox-bench --shared-folder=/Users/adiq/Projects --force`

Logs:
```
$ docker run -it -v $(pwd):/var/test alpine time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000
100000+0 records in
100000+0 records out
real	0m 0.94s
user	0m 0.00s
sys	0m 0.20s
100000+0 records in
100000+0 records out
real	0m 0.92s
user	0m 0.02s
sys	0m 0.19s
100000+0 records in
100000+0 records out
real	0m 0.92s
user	0m 0.00s
sys	0m 0.22s
100000+0 records in
100000+0 records out
real	0m 0.89s
user	0m 0.00s
sys	0m 0.19s
100000+0 records in
100000+0 records out
real	0m 0.81s
user	0m 0.00s
sys	0m 0.18s
100000+0 records in
100000+0 records out
real	0m 0.88s
user	0m 0.02s
sys	0m 0.16s
100000+0 records in
100000+0 records out
real	0m 0.80s
user	0m 0.00s
sys	0m 0.19s
100000+0 records in
100000+0 records out
real	0m 0.87s
user	0m 0.03s
sys	0m 0.15s
100000+0 records in
100000+0 records out
real	0m 0.88s
user	0m 0.00s
sys	0m 0.20s
100000+0 records in
100000+0 records out
real	0m 0.85s
user	0m 0.02s
sys	0m 0.17s
100000+0 records in
100000+0 records out
real	0m 0.92s
user	0m 0.02s
sys	0m 0.20s
100000+0 records in
100000+0 records out
real	0m 0.94s
user	0m 0.03s
sys	0m 0.17s
100000+0 records in
100000+0 records out
real	0m 0.87s
user	0m 0.03s
sys	0m 0.16s
100000+0 records in
100000+0 records out
real	0m 0.94s
user	0m 0.03s
sys	0m 0.16s
```