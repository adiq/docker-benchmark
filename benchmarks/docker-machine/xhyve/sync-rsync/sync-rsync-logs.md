# xhyve & rsync

Machine created with:
`docker-machine create --driver xhyve --xhyve-cpu-count 2 --xhyve-disk-size 20000 --xhyve-memory-size 8000 xhyve-bench`


Logs:
```
$ docker exec -it syncrsync_xhyve-benchmark-sync-rsync_1 time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000

  100000+0 records in
  100000+0 records out
  real	0m 0.16s
  user	0m 0.00s
  sys	0m 0.15s

  100000+0 records in
  100000+0 records out
  real	0m 0.18s
  user	0m 0.00s
  sys	0m 0.18s

  100000+0 records in
  100000+0 records out
  real	0m 0.20s
  user	0m 0.01s
  sys	0m 0.18s

  100000+0 records in
  100000+0 records out
  real	0m 0.19s
  user	0m 0.02s
  sys	0m 0.16s

  100000+0 records in
  100000+0 records out
  real	0m 0.20s
  user	0m 0.03s
  sys	0m 0.17s

  100000+0 records in
  100000+0 records out
  real	0m 0.18s
  user	0m 0.02s
  sys	0m 0.15s

  100000+0 records in
  100000+0 records out
  real	0m 0.18s
  user	0m 0.02s
  sys	0m 0.16s

  100000+0 records in
  100000+0 records out
  real	0m 0.21s
  user	0m 0.03s
  sys	0m 0.15s

  100000+0 records in
  100000+0 records out
  real	0m 0.18s
  user	0m 0.01s
  sys	0m 0.17s

  100000+0 records in
  100000+0 records out
  real	0m 0.18s
  user	0m 0.00s
  sys	0m 0.17s``