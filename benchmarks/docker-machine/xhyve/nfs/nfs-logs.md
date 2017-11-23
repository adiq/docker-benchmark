# xhyve & NFS

Machine created with:
`docker-machine create --driver xhyve --xhyve-cpu-count 2 --xhyve-disk-size 20000 --xhyve-memory-size 8000 xhyve-bench`

NFS configured using `docker-machine`; command `docker-machine-nfs xhyve-bench --shared-folder=/Users/adiq/Projects --force`

Logs:
```
$ docker run -it -v $(pwd):/var/test alpine time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000
100000+0 records in
100000+0 records out
real	0m 1.05s
user	0m 0.00s
sys	0m 0.18s

100000+0 records in
100000+0 records out
real	0m 1.09s
user	0m 0.00s
sys	0m 0.20s

100000+0 records in
100000+0 records out
real	0m 1.16s
user	0m 0.02s
sys	0m 0.16s

100000+0 records in
100000+0 records out
real	0m 1.13s
user	0m 0.02s
sys	0m 0.16s

100000+0 records in
100000+0 records out
real	0m 1.06s
user	0m 0.02s
sys	0m 0.16s

100000+0 records in
100000+0 records out
real	0m 1.08s
user	0m 0.02s
sys	0m 0.16s

100000+0 records in
100000+0 records out
real	0m 1.08s
user	0m 0.03s
sys	0m 0.16s

100000+0 records in
100000+0 records out
real	0m 1.02s
user	0m 0.00s
sys	0m 0.19s

100000+0 records in
100000+0 records out
real	0m 0.97s
user	0m 0.00s
sys	0m 0.17s

100000+0 records in
100000+0 records out
real	0m 1.13s
user	0m 0.05s
sys	0m 0.14s
```