class CheckIfAll1sAreatLeastLengthKPlacesAway {
    public boolean kLengthApart(int[] nums, int k) {
        int count=0;
        if(nums[0]==0)
        {
            count=k;
        }
        for(int i=1;i<nums.length;i++)
        {
            if(nums[i]==0)
            {
                count++;
            }
            else{
                if(count<k)
                {
                    return false;
                }
                count=0;
            }
        }
        return true;
    }
}