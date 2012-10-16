T=imread("input.bmp");
	
	P=T;
	k=0;
	
	for (x=1:600)
		k=k+1;
		if(T(x,55)==1)
			break;
		end
	end
	for (temp1= k+21:k+30)
		for temp2= 1:55
			P(temp1,temp2)=0;
		end
	end

	pre_y=55;
	pre_k=k;

	for(y=155:100:755)
		k=0;
		for (x=1:600)
			k=k+1;
			if(T(x,y)==1)
				break;
			end
		end
		for(temp1=pre_k+21:pre_k+30)
			for (temp2=pre_y:pre_y+55)
				P(temp1,temp2)=0;
			end
		end

		for(temp1=k+21:k+30)
			for (temp2=y-54:y)
				P(temp1,temp2)=0;
			end
		end

		if(k+21>pre_k+30)
			for(temp2=pre_k+30:k+21)
				for(temp1=((pre_y+y)/2)-4:((pre_y+y)/2)+5)
					P(temp2,temp1)=0;
				end
			end

		else
			for(temp2=k+21:pre_k+30)
				for(temp1=((pre_y+y)/2)-4:((pre_y+y)/2)+5)
					P(temp2,temp1)=0;
				end
			end
		end

		pre_y=y;
		pre_k=k;
	end

		for (temp1= pre_k+21:pre_k+30)
			for temp2= 745:800
				P(temp1,temp2)=0;
			end
		end

imwrite(P,"output.bmp");
