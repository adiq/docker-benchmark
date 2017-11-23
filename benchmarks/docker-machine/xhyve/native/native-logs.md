# xhyve & Native

Machine created with:
`docker-machine create --driver xhyve --xhyve-cpu-count 2 --xhyve-disk-size 20000 --xhyve-memory-size 8000 xhyve-bench`

*no sync*

Logs:
```
$ docker run -it -v $(pwd):/var/test alpine time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.03s
  sys	0m 0.05s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.01s
  sys	0m 0.07s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.01s
  sys	0m 0.08s
  100000+0 records in
  100000+0 records out
  real	0m 0.08s
  user	0m 0.00s
  sys	0m 0.08s
  100000+0 records in
  100000+0 records out
  real	0m 0.08s
  user	0m 0.01s
  sys	0m 0.07s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.00s
  sys	0m 0.08s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.00s
  sys	0m 0.09s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.01s
  sys	0m 0.08s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.02s
  sys	0m 0.07s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.01s
  sys	0m 0.08s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.02s
  sys	0m 0.07s
  100000+0 records in
  100000+0 records out
  real	0m 0.09s
  user	0m 0.02s
  sys	0m 0.06s```