package december;

class MaximumProductDifferenceBetweTwoPairs {
    public int maxProductDifference(int[] nums) {
        int x=Integer.MIN_VALUE;
        int y=Integer.MAX_VALUE;
        int z=Integer.MAX_VALUE;
        int w=Integer.MIN_VALUE;
        for(int i=0;i<nums.length;i++)
        {
            if(w < nums[i])
            {
                x=w;
                w=nums[i];
            }
            else if(nums[i] > x)
            {
                x=nums[i];
            }
            if(y > nums[i])
            {
                z=y;
                y=nums[i];
            }
            else if(z > nums[i])
            {
                z=nums[i];
            }
        }
        return (w*x)-(y*z);
    }
}