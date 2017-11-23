# xhyve & Unison

Machine created with:
`docker-machine create --driver xhyve --xhyve-cpu-count 2 --xhyve-disk-size 20000 --xhyve-memory-size 8000 xhyve-bench`


Logs:
```
$ docker exec -it syncunison_xhyve-benchmark-sync-unison_1 time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000

  100000+0 records in
  100000+0 records out
  real	0m 0.44s
  user	0m 0.01s
  sys	0m 0.32s

  100000+0 records in
  100000+0 records out
  real	0m 0.29s
  user	0m 0.01s
  sys	0m 0.23s

  100000+0 records in
  100000+0 records out
  real	0m 0.28s
  user	0m 0.00s
  sys	0m 0.25s

  100000+0 records in
  100000+0 records out
  real	0m 0.28s
  user	0m 0.00s
  sys	0m 0.23s

  100000+0 records in
  100000+0 records out
  real	0m 0.24s
  user	0m 0.02s
  sys	0m 0.22s

  100000+0 records in
  100000+0 records out
  real	0m 0.44s
  user	0m 0.08s
  sys	0m 0.20s

  100000+0 records in
  100000+0 records out
  real	0m 0.31s
  user	0m 0.03s
  sys	0m 0.22s

  100000+0 records in
  100000+0 records out
  real	0m 0.32s
  user	0m 0.04s
  sys	0m 0.20s

  100000+0 records in
  100000+0 records out
  real	0m 0.27s
  user	0m 0.04s
  sys	0m 0.20s

  100000+0 records in
  100000+0 records out
  real	0m 0.28s
  user	0m 0.00s
  sys	0m 0.28s```