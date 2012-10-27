s11=rbinom(1000,50,0.3)
s12=rpois(1000,15)
s13=rnorm(1000, mean=15, sd=sqrt(10.5))
s21=rbinom(10000,50,0.3)
s22=rpois(10000,15)
s23=rnorm(10000, mean=15, sd=sqrt(10.5))
s31=rbinom(100000,50,0.3)
s32=rpois(100000,15)
s33=rnorm(100000, mean=15, sd=sqrt(10.5))
s41=rbinom(1000000,50,0.3)
s42=rpois(1000000,15)
s43=rnorm(1000000, mean=15, sd=sqrt(10.5))

for(i in 1:length(s11)){
	        write(s11[i],file="s11.txt",append=TRUE)
	        write(s12[i],file="s12.txt",append=TRUE)
		write(s13[i],file="s13.txt",append=TRUE)
}

for(i in 1:length(s21)){
	        write(s21[i],file="s21.txt",append=TRUE)
	        write(s22[i],file="s22.txt",append=TRUE)
		write(s23[i],file="s23.txt",append=TRUE)
}

for(i in 1:length(s31)){
	        write(s31[i],file="s31.txt",append=TRUE)
	        write(s32[i],file="s32.txt",append=TRUE)
		write(s33[i],file="s33.txt",append=TRUE)
}

for(i in 1:length(s41)){
	        write(s41[i],file="s41.txt",append=TRUE)
	        write(s42[i],file="s42.txt",append=TRUE)
		write(s43[i],file="s43.txt",append=TRUE)
}
